<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Helper;
use Exception;

class LogoutController extends Controller
{
    public function logout()
    {
        try {
            if (Auth::check('api')) {
                Auth::logout('api');
                return Helper::jsonResponse(true, 'Logged out successfully. Token revoked.', 200);
            } else {
                return Helper::jsonErrorResponse( 'User not authenticated', 401);
            }
        } catch (Exception $e) {
            return Helper::jsonErrorResponse($e->getMessage(), 500);
        }
    }
}
