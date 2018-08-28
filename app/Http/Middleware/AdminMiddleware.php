<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminMiddleware
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
         if (Auth::User()->email != 'fdejesussanchez@uniguajira.edu.co')
        {
            Session::flash('message-error', ' Ingrese nuevamente al sistema');
            return redirect()->to('home');
        }

        else{
           return $next($request);
        }

    }

}
