<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainerMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('api')->check() && Auth::guard('api')->check() && Auth::guard('api')->user()->hasRole('trainer')) {
            return $next($request);
        }

        return response()->json(['error' => 'Unauthorized action.']);
    }
}

