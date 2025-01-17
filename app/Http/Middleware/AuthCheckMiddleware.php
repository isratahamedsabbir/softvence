<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthCheckMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->hasRole('admin')) {
                return redirect()->route('dashboard');
            } elseif(Auth::user()->hasRole('trainer')) {
                return redirect()->route('trainer.dashboard');
            } else{
                return redirect()->route('profile'); 
            }
        }
        return $next($request);
    }
}

