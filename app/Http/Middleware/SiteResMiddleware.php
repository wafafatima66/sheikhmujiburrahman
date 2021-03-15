<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class SiteResMiddleware
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
        if (Auth::user()->userActivation == 0) {
            abort(404);
        }
        return $next($request);
    }
}
