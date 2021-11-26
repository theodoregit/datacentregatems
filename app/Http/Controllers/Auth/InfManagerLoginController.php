<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class InfManagerLoginController extends Controller
{
    public function __contruct(){
        $this->middleware('guest:inf-manager');
    }
    public function loginForm(){
        return view('auth.inf-manager-login');
    }
    public function login(Request $request){
        //validate
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //attempt to login
        if(Auth::guard('inf-manager')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
            return redirect()->intended('inf-manager/request-form-inf');
        }
        else{
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
    }
}
