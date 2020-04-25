<?php

namespace App\Http\Middleware;
use Illuminate\Foundation\Http\Middleware\Admin_middleware_login as Middleware;


use Closure;

class Admin_middleware_login
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

         if (! $request->expectsJson()) {
            return redirect('/admin');
        }
    }
}
