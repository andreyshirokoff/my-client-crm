<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
/*    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }*/

    /*public function handle(\Request $request, \Closure $next)
    {
        if (!$request->user()) {
            return redirect()->route('login');
        }else{
            return redirect()->route('dashboard');
        }

        return $next($request);
    }*/


}
