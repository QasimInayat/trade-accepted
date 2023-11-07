<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleType;

class VehicleTypeController extends Controller
{
    public function index(){
        $data['title'] = 'Vehicle Type';
        return view('admin.pages.vehicle-type.index' ,$data);
    }
    public function create(){
        $data['vehicletypes'] = VehicleType::get();
        return view('admin.pages.vehicle-type.create' ,$data);
    }
}
