<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class DCAdminLoginController extends Controller
{
    use AuthenticatesUsers;

    public function _construct(){
        $this->middleware('guest:dc-admin');
    }

    public function showLoginForm(){
        return view('auth.dc-admin-login');
    }

    public function login(Request $request){
        //validate inputs
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('dc-admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
            return redirect()->intended('dc-admin/request-form-dc-admin');
        }
        else{
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
    }
}
