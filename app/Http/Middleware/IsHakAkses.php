<?php

namespace App\Http\Middleware;

use Closure;

class IsHakAkses
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
        if(auth()->check() &&  $request->user()->hak_akses==3){
            return $next($request);

        }
        return redirect()->guest('/');
    }
}
