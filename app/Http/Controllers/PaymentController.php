<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class PaymentController extends Controller
{
    public function index($slug){
        $data['title'] = 'Payment';
        $data['heading'] = 'Payment';
        $data['vehicle'] = Vehicle::where('slug' ,$slug)->firstorfail();
        return view('pages.payment' , $data);
    }
}
