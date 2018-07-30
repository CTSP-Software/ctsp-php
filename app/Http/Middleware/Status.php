<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Contracts\Session\Session;
//use Illuminate\Support\Facades\Auth;
use Auth;
use Session;
class Status
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

        if(!Auth::user()->status)
        {
            Session::flash('info', 'You do not have permissions to perform this action.');
            return redirect()->back();
        }

        return $next($request);
    }
}
