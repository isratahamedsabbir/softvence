<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $request->authenticate();

            $request->session()->regenerate();
            
            if (Auth::user()->hasRole('admin')) {
                return redirect()->intended(route('admin.dashboard', absolute: false))->with('t-success', 'Login Successfully');
            } elseif (Auth::user()->hasRole('retailer')) {
                return redirect()->intended(route('retailer.dashboard', absolute: false))->with('t-success', 'Login Successfully');
            } elseif (Auth::user()->hasRole('client')) {
                return redirect()->intended(route('client.dashboard', absolute: false))->with('t-success', 'Login Successfully');
            } else {
                return redirect()->intended(route('home', absolute: false))->with('t-error', 'Something went wrong. Please try again.');
            }

        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        session()->put('t-success', 'Logout Successfully');

        return redirect('/');
    }
}
