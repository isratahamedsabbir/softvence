<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TrainerMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->hasRole('retailer') && auth('api')->user()->status === 'active') {
            return $next($request);
        }

        return response()->json(['t-error' => 'Unauthorized action.'], Response::HTTP_FORBIDDEN);
    }
}

