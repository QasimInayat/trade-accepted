<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile(){
        $data ['title'] = 'Profile';
        $data ['heading'] = 'Profile';
        $data ['user'] = User::where('id' , auth()->user()->id)->firstorfail();
        return view('pages.profile',$data);
}
}
