<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check())
        {
            if(Auth::user()->user_type=='admin')
            {
                return redirect('/techreme');
            }
            if(Auth::user()->user_type=='manager')
            {
                return redirect('/techreme');
            }
            if(Auth::user()->user_type=='supervisor')
            {
                return redirect('/techreme');
            }
            if(Auth::user()->user_type=='operator')
            {
                return redirect('/techreme');
            }
            if(Auth::user()->user_type=='client')
            {
                return redirect('/techreme');
            }
            if(Auth::user()->user_type=='dealer')
            {
                return redirect('/techreme');
            }
            else
            {
                return redirect()->back();
            }

        }

        return $next($request);
    }
}
