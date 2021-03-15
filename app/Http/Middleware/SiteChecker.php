<?php

namespace App\Http\Middleware;

use App\Super;
use Closure;

class SiteChecker
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
        $status = Super::first()->shutDown;
        if ($status == 1) {
            return $next($request);
        } else {
            return abort(404);
        }
    }
}
