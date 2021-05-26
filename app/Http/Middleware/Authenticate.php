<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */

    // public function handle($request, $next, ...$guards)
    // {
    //     $this->authenticate($request, $guards);
    //     if (session("isVerified")) {
    //         return $next($request);
    //     }
    //     return \redirect('verify');
    // }
    
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
