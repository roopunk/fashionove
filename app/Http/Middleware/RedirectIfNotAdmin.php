<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotAdmin
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
        if( ! $request->user()->isAdmin())
        {
            return view('errors.404');


        }
        return $next ($request);
        //if(!$request->Auth())
        //return $next($request);

        //if(Auth::user()->is_admin())
        //if(\Illuminate\Support\Facades\Auth::user()->is_admin())
        //{
          //  return view('/');
        //}

    }
}
