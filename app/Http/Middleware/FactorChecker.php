<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
use PragmaRX\Google2FA\Google2FA;
use App\PasswordSecurity;

class FactorChecker
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
        if (!PasswordSecurity::where('user_id', Auth::user()->id)->exists()) {
            return redirect('/2fa');
        } else {
            $user = Auth::user();
            $checkEnabled = $user->passwordSecurity->google2fa_enable;
            if (!$checkEnabled) {
                return redirect('/2fa');
            }
        }
        return $next($request);
    }
}
