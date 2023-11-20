<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Gallery;
use App\Models\Make;

class VehicleController extends Controller
{
    public function index(){
        $data['title'] = 'Vehicle';
        $data['vehicles'] = Vehicle::get();
        return view('admin.pages.vehicle.index' ,$data);
    }
    public function create(){
        $data['title'] = 'Create Vehicle';
        $data['makes'] = Make::get();
        return view('admin.pages.vehicle.create' ,$data);
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:191',
            'price' => 'required|max:191',
            'address' => 'required|max:191',
            'country_id' => 'required',
            'city_id' => 'required',
            'mileage' => 'required|max:191',
            'make_id' => 'required',
            'model_id' => 'required',
        ]);
        $store = Vehicle::create([
           'user_id' => $request->user_id,
           'title' => $request->title,
           'price' => $request->price,
           'address' => $request->address,
           'country_id' => $request->country_id,
           'city_id' => $request->city_id,
           'mileage' => $request->mileage,
           'transmission' => $request->transmission,
           'exterior_color' => $request->exterior_color,
           'interior_color' => $request->interior_color,
           'make_id' => $request->make_id,
           'model_id' => $request->model_id,
           'trim' => $request->trim,
           'year' => $request->year,
           'description' => $request->description,
        ]);
        if($request->has('images')){
            foreach($request->file('images') as $index=>$image){
                $imageName = 'vehicle' . '-' . time() .'-'.rand(1000,100). '.' . $image->getClientOriginalExtension();
                $image->move(public_path('upload/vehicle'),$imageName);
                Gallery::create([
                    'vehicle_id' => $store->id,
                    'image' => $imageName,
                    'is_main' => $index==0 ? 1 : 0,
                ]);
            }
        }
        if(!empty($store->id)){
            return redirect()->route('admin.vehicle.index')->with('success' , 'Vehicle created');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function edit($id){
        $data['title'] = 'Edit Vehicle';
        $data['makes'] = Make::get();
        $data['vehicle'] = Vehicle::where('id' , $id)->firstorfail();
        $data['galleries'] = Gallery::where('vehicle_id' , $id)->get();
        return view('admin.pages.vehicle.edit' ,$data);
    }
    public function update(Request $request , $id){
        $request->validate([
            'title' => 'required|max:191',
            'price' => 'required|max:191',
            'address' => 'required|max:191',
            'country_id' => 'required',
            'city_id' => 'required',
            'mileage' => 'required|max:191',
            'make_id' => 'required',
            'model_id' => 'required',
        ]);
        $update = Vehicle::where('id' , $id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'address' => $request->address,
            'country_id' => $request->country_id,
            'city_id' => $request->city_id,
            'mileage' => $request->mileage,
            'transmission' => $request->transmission,
            'exterior_color' => $request->exterior_color,
            'interior_color' => $request->interior_color,
            'make_id' => $request->make_id,
            'model_id' => $request->model_id,
            'trim' => $request->trim,
            'year' => $request->year,
            'description' => $request->description,
        ]);
        $vehicle = Vehicle::where('id' , $id)->firstorfail();
        if($request->has('images')){
            foreach($request->file('images') as $index=>$image){
                $imageName = 'vehicle' . '-' . time() .'-'.rand(1000,100). '.' . $image->getClientOriginalExtension();
                $image->move(public_path('upload/vehicle'),$imageName);
                Gallery::create([
                    'vehicle_id' => $vehicle->id,
                    'image' => $imageName,
                    'is_main' => $index==0 ? 1 : 0,
                ]);
            }
        }
        Gallery::where('vehicle_id', $vehicle->id)->update(['is_main' => 0]);
        Gallery::where('id', $request->is_main)->update(['is_main' => 1]);
        if($update > 0){
            return redirect()->route('admin.vehicle.index')->with('success' , 'Vehicle updated');
        }else{
            return redirect()->back()->with('error' , 'Something went wrong');
        }
    }
    public function remove_gallery($id){
        Gallery::find($id)->delete();
        if(!empty($id)){
            return redirect()->back()->with('success' , 'Image deleted');
        }else{
            return redirect()->back()->with('error' , '404 image not found');
        }
    }
    public function delete($id){
        $vehicle = Vehicle::where('id' , $id)->delete();
        if(!empty($vehicle)){
            return redirect()->back()->with('success' , 'Vehicle deleted');
        }else{
            return redirect()->back()->with('error' , 'Something went wrong');
        }
    }
}
