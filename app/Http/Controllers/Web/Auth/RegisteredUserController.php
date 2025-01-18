<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        if (Auth::user()->hasRole('admin')) {
            return redirect()->intended(route('dashboard', absolute: false))->with('t-success', 'Login Successfully');
        } elseif (Auth::user()->hasRole('retailer')) {
            return redirect()->intended(route('retailer.dashboard', absolute: false))->with('t-success', 'Login Successfully');
        } elseif (Auth::user()->hasRole('user')) {
            return redirect()->intended(route('home', absolute: false))->with('t-success', 'Login Successfully');
        } else {
            return redirect()->intended(route('home', absolute: false))->with('t-error', 'Something went wrong. Please try again.');
        }

    }
}
