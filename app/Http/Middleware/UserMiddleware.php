<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::guard('api')->check() && Auth::user()->hasRole('user')) {
            return $next($request);
        }

        return response()->json(['error' => 'Unauthorized action.'], Response::HTTP_FORBIDDEN);
    }
}

