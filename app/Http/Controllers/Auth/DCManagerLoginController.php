<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DCManagerLoginController extends Controller
{
    public function __contruct(){
        $this->middleware('guest:dc-manager');
    }
    public function loginForm(){
        return view('auth.dc-manager-login');
    }
    public function login(Request $request){
        //validate
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        //attempt to login
        if(Auth::guard('dc-manager')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
            return redirect()->intended('dc-manager/request-form-dc');
        }
        else{
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
    }
}
