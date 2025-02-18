<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->hasRole('developer')) {
                return redirect()->intended(route('developer.dashboard', absolute: false));
            }elseif (Auth::user()->hasRole('admin')) {
                return redirect()->intended(route('admin.dashboard', absolute: false));
            } elseif (Auth::user()->hasRole('retailer')) {
                return redirect()->intended(route('retailer.dashboard', absolute: false));
            } elseif (Auth::user()->hasRole('client')) {
                return redirect()->intended(route('client.dashboard', absolute: false));
            }
        }

        return redirect()->intended(route('home', absolute: false));
    }
}