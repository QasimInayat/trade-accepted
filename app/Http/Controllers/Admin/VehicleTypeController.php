<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleType;
use Str;

class VehicleTypeController extends Controller
{
    public function index(){
        $data['title'] = 'Vehicle Type';
        $data['vehicletypes'] = VehicleType::get();
        return view('admin.pages.vehicle-type.index' ,$data);
    }
    public function create(){
        $data['vehicletypes'] = VehicleType::get();
        return view('admin.pages.vehicle-type.create' ,$data);
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/',$imageName);
        }
        else{
            $imageName = null;
        }
        $slug = Str::slug($request->name , '-');
        $store = VehicleType::create([
            'name' => $request->name,
            'slug' => $slug,
            'status' => $request->status,
            'image' => $imageName,
        ]);
        if(!empty($store->id)){
            return redirect()->route('admin.vehicle_type.index')->with('success','Vehicle Type Created');
        }
        else{
            return redirect()->route('admin.vehicle_type.create')->with('error','Something Went Wrong');
        }
    }
    public function edit($slug){
        $data['vehicletype'] = VehicleType::where('slug',$slug)->firstorfail();
        return view('admin.pages.vehicle-type.edit' ,$data);
    }
    public function update(Request $request , $slug){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        $imageData = VehicleType::where('slug',$slug)->first();
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/', $imageName);
        }
        else{
            $imageName = $imageData->image;
        }
        $update = VehicleType::where('slug',$slug)->update([
            'name' => $request->name,
            'image' => $imageName,
            'status' => $request->status,
        ]);
        if($update > 0){
            return redirect()->route('admin.vehicle_type.index')->with('success','Vehicle Type Updated');
        }
        return redirect()->route('admin.vehicle_type.edit')->with('error','something went wrong');
    }
    public function delete($slug){
        $vehicletypes = VehicleType::where('slug',$slug)->firstorfail();
        if(!empty($vehicletypes)){
         $vehicletypes->delete();
         return redirect()->route('admin.vehicle_type.index')->with('success','Vehicle Type Deleted');
        }
        return redirect()->route('admin.vehicle-_type.index')->with('error','record not found');
     }
}
