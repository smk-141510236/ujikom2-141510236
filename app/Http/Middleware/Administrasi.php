<?php

namespace App\Http\Middleware;

use Closure;

class Administrasi
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
        if (auth()->check() && $request->user()->permision == 'Admin') {
            return $next($request);
        }
        elseif (auth()->check() && $request->user()->permision == 'Administrasi') {
            return $next($request);
        }
        return redirect()->guest('/');
    }
}
