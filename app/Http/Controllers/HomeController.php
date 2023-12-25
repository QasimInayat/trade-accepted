<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data ['heading'] = 'Home';
        $data ['vehicles'] = Vehicle::where('status' , 1)->orderBy('created_at' , 'DESC')->get();
        return view('index' ,$data);
    }
}
