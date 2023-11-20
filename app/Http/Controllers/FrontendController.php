<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Gallery;

class FrontendController extends Controller
{
    public function index(){
        $data ['title'] = 'Index';
        $data ['vehicles'] = Vehicle::get();
        return view('pages.index',$data);
    }
    public function detail($id){
        $data ['title'] = 'Detail';
        $data ['vehicle'] = Vehicle::where('id',$id)->firstorfail();
        $data['galleries'] = Gallery::where('vehicle_id' , $data['vehicle']->id)->get();
        return view('pages.detail',$data);
    }
    public function search(){
        $data ['title'] = 'Search';
        return view('pages.search',$data);
    }
    public function messanger(){
        $data ['title'] = 'Messanger';
        return view('pages.messanger',$data);
    }
}
