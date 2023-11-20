<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForentedController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function detail(){
        return view('pages.detail');
    }
    public function search(){
        return view('pages.search');
    }
    public function mesanger(){
        return view('pages.mesanger');
    }
}
