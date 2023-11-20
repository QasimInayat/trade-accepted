<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class FrontendController extends Controller
{
    public function index(){
        $data ['title'] = 'Index';
        $data ['vehicles'] = Vehicle::where('user_id', auth()->user()->id)->get();
        return view('pages.index',$data);
    }
    public function detail($id){
        $data ['title'] = 'Detail';
        $data ['vehicle'] = Vehicle::where('id',$id)->firstorfail();
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
