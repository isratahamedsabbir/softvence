<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CustomerMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->hasRole('customer')) {
            return $next($request);
        }
        return response()->json(['t-error' => 'Unauthorized action.'], Response::HTTP_FORBIDDEN);
    }
}

