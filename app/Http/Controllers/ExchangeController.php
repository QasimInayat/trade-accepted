<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class ExchangeController extends Controller
{
    public function exchange(){
        $data ['title'] = 'Exchange your cars';
        $data ['heading'] = 'Exchange your cars';
        $data ['vehicles'] = Vehicle::get();
        return view('pages.exchange',$data);
    }
    public function exchangeVehicle($id){
        $data['vehicle'] = Vehicle::where('id',$id)->firstorfail();
        $view = view('pages.exchange-vehicle',$data);
        return response(['success' => true, 'data' => $view->render()]);
    }
}
