<?php

namespace App\Http\Middleware;

use Closure;

class UnAuthorized
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
        if (!session('userinfo')) {
            return redirect('/account/signup');
        }
        return $next($request);
    }
}
