<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:admin');
    }
    public function showLoginForm()
    {
      return view ('auth.admin-login');
    }

    public function login(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:3'
        ]);
        // $user_array=array(
        //     'email'=>$request->get('email'),
        //     'password'=>$request->get('loginpapasswordssword')
        // );

        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
            // if(Auth::guard('admin')->attempt($user_array),$request->remember){
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email','remember'));

    }
}
