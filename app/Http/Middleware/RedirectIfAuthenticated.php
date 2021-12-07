<?php

namespace App\Http\Middleware;

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
        switch ($guard) {
            case 'unit-manager':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('unit-manager.all-requests');
                }
                break;
            case 'dc-manager':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('dc-manager.all-requests-dc-man');
                }
                break;
            case 'inf-manager':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('inf-manager.requests-confirmed');
                }
                break;
            case 'dc-admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('dc-admin.approved-requests');
                }
                break;
            case 'dc-reception':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('dc-reception.approved-requests');
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                return redirect('/home');
                }
                break;
        }
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

        return $next($request);
    }
}
