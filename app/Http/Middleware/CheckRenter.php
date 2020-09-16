<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckRenter
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
        
       if (auth()->user()->role_id == 2 || auth()->user()->role_id == 1) {
            return abort(403);
        }
        return $next($request);
    }
}
