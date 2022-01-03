<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class DCManager
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
        if(Auth::user()->role == 2){
            return redirect()->route('unit-manager/request-form-is');
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
       
        if (Auth::user()->role == 3) {
            return $next($request);
        }
    }
}
