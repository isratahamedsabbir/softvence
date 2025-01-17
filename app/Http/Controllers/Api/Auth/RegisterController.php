<?php

namespace App\Http\Controllers\Api\Auth;

use App\Helpers\Helper;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Mail\OtpMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class RegisterController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'name'       => 'required|string|max:100',
            'email'      => 'required|string|email|max:150|unique:users',
            'password'   => 'required|string|min:6|confirmed',
        ]);
        try {

            if ($request->input('role') == 'trainer') {
                $status = 'inactive';
            } else {
                $status = 'active';
            }

            $user = User::create([
                'name'           => $request->input('name'),
                'email'          => strtolower($request->input('email')),
                'password'       => Hash::make($request->input('password')),
                'email_verified_at' => now(),
                'status'         => $status
            ]);

            $token = auth('api')->login($user);

            //notify to admin start
            /* $users = User::where('role', 'admin')->get();
            $notiData = [
                'user_id' => $user->id,
                'message' => 'User register in successfully.'
            ];
            foreach($users as $user){
                $user->notify(new UserRegistrationNotification($notiData));
            }
            broadcast(new NewNotificationEvent($notiData))->toOthers(); */
            //notify to admin end
            
            return response()->json([
                'status'     => true,
                'message'    => 'User register in successfully.',
                'code'       => 200,
                'token_type' => 'bearer',
                'token'      => $token,
                'expires_in' => auth('api')->factory()->getTTL() * 60,
                'data' => auth('api')->user()
            ], 200);
        } catch (Exception $e) {
            return Helper::jsonErrorResponse('User registration failed', 500, [$e->getMessage()]);
        }
    }
    public function VerifyEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'otp'   => 'required|digits:4',
        ]);
        try {
            $user = User::where('email', $request->input('email'))->first();

            //! Check if email has already been verified
            if (!empty($user->email_verified_at)) {
                return  Helper::jsonErrorResponse('Email already verified.', 409);
            }

            if ((string)$user->otp !== (string)$request->input('otp')) {
                return Helper::jsonErrorResponse('Invalid OTP code', 422);
            }

            //* Check if OTP has expired
            if (Carbon::parse($user->otp_expires_at)->isPast()) {
                return Helper::jsonErrorResponse('OTP has expired. Please request a new OTP.', 422);
            }

            //* Verify the email
            $user->email_verified_at = now();
            $user->otp               = null;
            $user->otp_expires_at    = null;
            $user->save();

            return Helper::jsonResponse(true, 'Email verification successful.', 200);
        } catch (Exception $e) {
            return Helper::jsonErrorResponse($e->getMessage(), $e->getCode());
        }
    }

    public function ResendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);
        try {
            $user = User::where('email', $request->input('email'))->first();
            if (!$user) {
                return Helper::jsonErrorResponse('User not found.', 404);
            }

            if ($user->email_verified_at) {
                return Helper::jsonErrorResponse('Email already verified.', 409);
            }

            $newOtp               = rand(1000, 9999);
            $otpExpiresAt         = Carbon::now()->addMinutes(60);
            $user->otp            = $newOtp;
            $user->otp_expires_at = $otpExpiresAt;
            $user->save();

            //* Send the new OTP to the user's email
            Mail::to($user->email)->send(new OtpMail($newOtp, $user, 'Verify Your Email Address'));

            return Helper::jsonResponse(true, 'A new OTP has been sent to your email.', 200);
        } catch (Exception $e) {
            return Helper::jsonErrorResponse($e->getMessage(), $e->getCode());
        }
    }
}
