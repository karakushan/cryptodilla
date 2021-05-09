<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Google2FACheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user=auth()->user();
        if (!$user->google2fa_status){
            return $next($request);
        }

        if ($user->google2fa_status && session()->get('google2fa_is_auth') !== 1) {
            return redirect()->route('google2fa');
        }

        return $next($request);

    }
}
