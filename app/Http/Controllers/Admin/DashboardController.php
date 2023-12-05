<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard(){
        $data['title'] = 'Admin Dashboard';
        $data['totalUsers'] = User::count();
        $data['totalVehicles'] = Vehicle::count();
        $data['users'] = User::orderBy('created_at' , 'DESC')->take(4)->get();
        $data['vehicles'] = Vehicle::orderBy('created_at' , 'DESC')->take(4)->get();
        return view('admin.pages.dashboard' , $data);
    }
    public function reviews(){
        $data['title'] = 'Reviews';
        return view('admin.pages.reviews.index' , $data);
    }
}
