<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index(){
        $data['title'] = 'Vehicle';
        return view('admin.pages.vehicle.index' ,$data);
    }
}
