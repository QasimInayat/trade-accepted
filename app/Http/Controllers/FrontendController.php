<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data ['title'] = 'Index';
        return view('pages.index',$data);
    }
    public function detail(){
        $data ['title'] = 'Detail';
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
