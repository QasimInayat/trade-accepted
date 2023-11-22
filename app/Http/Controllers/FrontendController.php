<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Gallery;
use App\Models\User;

class FrontendController extends Controller
{
    public function index(){
        $data ['title'] = 'Index';
        $data ['heading'] = 'Home';
        $data ['vehicles'] = Vehicle::orderBy('created_at' , 'DESC')->get();
        return view('index',$data);
    }
    public function detail($slug){
        $data ['title'] = 'Detail';
        $data ['heading'] = 'Detail';
        $data ['vehicle'] = Vehicle::where('slug',$slug)->firstorfail();
        $data['galleries'] = Gallery::where('vehicle_id' , $data['vehicle']->id)->get();
        return view('pages.detail',$data);
    }
    public function search(){
        $data ['title'] = 'Search';
        return view('pages.search',$data);
    }
    public function messenger(){
        $data ['title'] = 'Messenger';
        return view('pages.messenger',$data);
    }
}
