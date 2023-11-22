<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehicle;

class ProfileController extends Controller
{
    public function profile(){
        $data ['title'] = 'Profile';
        $data ['heading'] = 'Profile';
        $data ['user'] = User::where('id' , auth()->user()->id)->firstorfail();
        $data ['vehicles'] = Vehicle::where('user_id' , auth()->user()->id)->orderBy('created_at' , 'DESC')->get();
        return view('pages.profile',$data);
}
}
