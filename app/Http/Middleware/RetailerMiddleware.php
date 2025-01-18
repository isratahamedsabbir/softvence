<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RetailerMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->hasRole('retailer')) {
            return $next($request);
        }

        return abort(403, 'Unauthorized action.');
    }
}

