<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm(){
        $data['title'] = 'Admin Login';
        return view('admin.auth.login' ,$data);
    }
}
