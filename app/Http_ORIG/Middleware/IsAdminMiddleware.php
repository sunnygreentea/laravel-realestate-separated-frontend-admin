<?php

namespace App\Http\Middleware;

use Closure;

class IsAdminMiddleware
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
        //print_r(auth()->user()->roles->toArray());
        
        if (!auth()->user()->is_admin) {
            abort(403);
        }
        
        return $next($request);
    }
}
