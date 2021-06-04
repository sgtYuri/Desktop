<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class StatusMiddleware
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
        $status ='up';
        if(status == 'down'){
            return'website is down';
        }


        return $next($request);
    }
}
