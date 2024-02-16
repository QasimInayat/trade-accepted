<?php

namespace App\Http\Controllers;

use App\Models\Make;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    public function exchange(Request $request){
        $data ['title'] = 'Exchange your cars';
        $data ['heading'] = 'Exchange your cars';
        $data ['vehicles'] = Vehicle::where(['status'=>'1','user_id' => auth()->user()->id])->get();
        $data['makes'] = Make::get();
        if(isset($request->vehicle_id)){
            $vehicle = Vehicle::where('id',$request->vehicle_id)->first();
            // dd(array_values($request->make));

            $query = new Vehicle();
            if(isset($request->make)){
                $query = $query->whereIn('make_id',$request->make);
            }
            if(isset($request->model)){
                $query = $query->whereIn('model_id',$request->model);
            }
            if(isset($request->year)){
                $query = $query->whereIn('year',$request->year);
            }
            if(isset($request->transmission)){
                $query = $query->whereIn('transmission',$request->transmission);
            }

            $query = $query->get();
            $title = 'Exchange your cars';
            $heading = 'Exchange your cars';
            $makes = Make::get();
            $vehicle['id'] = $vehicle->id;
            $vehicle['title'] = $vehicle->title;
            $exchange = $request->vehicle_id;
            $make = array_values($request->input('make', []));
            $model = array_values($request->input('model', []));
            $year = array_values($request->input('year', []));
            $transmission = array_values($request->input('transmission', []));
            return view('pages.exchange-results',compact('make','model','year','transmission', 'query','exchange','title','heading','makes','vehicle'));

        }
        return view('pages.exchange',$data);
    }
    public function exchangeVehicle($id){
        $data['vehicle'] = Vehicle::where('id',$id)->firstorfail();
        $view = view('pages.exchange-vehicle',$data);
        return response(['success' => true, 'data' => $view->render()]);
    }
    public function store(Request $request){
    }
}
