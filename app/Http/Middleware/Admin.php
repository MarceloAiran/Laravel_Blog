<?php

namespace App\Http\Middleware;

Use Auth;

Use Session;

use Closure;

class Admin
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

        if(!Auth::user()->admin)
        {
           Session::flash('info' , 'You do not jave permissions to perdorm this action.');

           return redirect()->back();
        }

        return $next($request);
    }
}
