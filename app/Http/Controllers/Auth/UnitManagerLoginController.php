<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UnitManagerLoginController extends Controller
{
    public function __contruct(){
        $this->middleware('guest:unit-manager');
    }
    public function loginForm(){
        return view('auth.unit-manager-login');
    }
    public function login(Request $request){
        //validate
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        //attempt to login
        if(Auth::guard('unit-manager')->attempt(['email'=>$request->email, 'password'=>$request->password, 'is_active'=>1], $request->remember)){
            return redirect()->intended('unit-manager/request-form-is');
        }
        else{
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
    }
}
