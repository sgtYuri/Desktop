<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PrivacyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (env('APP_PRIVACY') === true) {
            return 'Privacy error';
        }
        return $next($request);
    }
}
