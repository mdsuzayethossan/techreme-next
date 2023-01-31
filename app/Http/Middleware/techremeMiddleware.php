<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class techremeMiddleware
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
        if(Auth::check() && Auth::user()->user_type == 'admin')
        {
            return $next($request);
        }
        if(Auth::check() && Auth::user()->user_type == 'manager')
        {
            return $next($request);
        }
        if(Auth::check() && Auth::user()->user_type == 'supervisor')
        {
            return $next($request);
        }
        if(Auth::check() && Auth::user()->user_type == 'operator')
        {
            return $next($request);
        }
        if(Auth::check() && Auth::user()->user_type == 'client')
        {
            return $next($request);
        }
        if(Auth::check() && Auth::user()->user_type == 'dealer')
        {
            return $next($request);
        }
        else
        {
            return redirect()->back();
        }
    }
}
