<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request)
        //->header('Access-Control-Allow-Origin', '*')
        //->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        ->header('Access-Control-Allow-Credentials', 'true')
        ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
        ->header('Access-Control-Allow-Headers', 'Content-Type, Accept, Authorization, X-Requested-With')
        ->header('Access-Control-Allow-Origin', 'POST, GET, OPTIONS, PUT, DELETE');
    }
}
