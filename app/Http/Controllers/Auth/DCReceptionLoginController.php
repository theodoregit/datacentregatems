<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class DCReceptionLoginController extends Controller
{
    use AuthenticatesUsers;

    public function _construct(){
        $this->middleware('guest:dc-reception');
    }

    public function showLoginForm(){
        return view('auth.dc-reception-login');
    }

    public function login(Request $request){
        //validate inputs
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::guard('dc-reception')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
            return redirect()->intended('dc-reception/approved-requests');
        }
        else{
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
    }
}
