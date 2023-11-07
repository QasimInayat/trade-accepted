<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm(){
        $data['title'] = 'Admin Login';
        if(auth()->guard('admin')->check()){
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login' ,$data);
    }

    public function login(Request $request){
        $request->validate([
            'email' =>'required',
            'password' =>'required',
        ]);
        $credentials = request()->only('email', 'password');
        if (auth()->guard('admin')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('admin.dashboard')->with('success','Admin Logged in');
        }
        return redirect()->route('admin.login')->with('error','Invalid Email or Password');

    }
}
