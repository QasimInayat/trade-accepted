<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $data['title'] = 'Admin Dashboard';
        return view('admin.pages.dashboard' , $data);
    }
    public function user(){
        $data['title'] = 'User List';
        return view('admin.pages.user.index' , $data);
    }
    public function reviews(){
        $data['title'] = 'Reviews';
        return view('admin.pages.reviews.index' , $data);
    }
}
