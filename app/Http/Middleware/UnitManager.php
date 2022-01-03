<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class UnitManager
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
        if(!Auth::check()){
            return redirect()->route('login');
        }
        if(Auth::user()->role == 1){
            return redirect()->route('home');
        }
        if(Auth::user()->role == 3){
            return redirect()->route('dc-manager/request-form-dc');
        }
        if(Auth::user()->role == 4){
            return redirect()->route('inf-manager/request-form-inf');
        }
        if(Auth::user()->role == 5){
            return redirect()->route('dc-admin/request-form-dc-admin');
        }
        if(Auth::user()->role == 6){
            return redirect()->route('dc-reception/approved-requests');
        }
       
        if (Auth::user()->role == 2) {
            return $next($request);
        }
    }
}
