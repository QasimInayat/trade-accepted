<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Make;

class MakeController extends Controller
{
    public function index(){
        $data ['title'] = 'Make List';
        $data ['makes'] = Make::get();
        return view('admin.pages.make.index',$data);
    }

    public function create(){
        $data ['title'] = 'Make Create';
        return view('admin.pages.make.create',$data);
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'image' => 'required',
        ]);
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/', $imageName);

        }
        else{
            $imageName = null;
        }
        $slug = Str::slug($request->name, '-');
        $store = Make::create([
            'name' =>$request->name,
            'status' =>$request->status,
            'slug'=>$slug,
            'image' => $imageName,
        ]);

        if(!empty($store->id)){
            return redirect()->route('admin.make.index')->with('success','make Created');
        }
        else{
            return redirect()->route('admin.make.create')->with('error','Something Went Wrong');
        }
    }

    public function edit($slug)
    {
        $data ['title'] = 'Make Edit';
        $data ['make'] =  Make::where('slug' , $slug)->firstorfail();
        return view('admin.pages.make.edit' ,$data);
    }

    public function update(Request $request, $slug){
        $request->validate([
            'name' => 'required|max:191',
            'status' => 'required',
        ]);

        $imageData =  Make::where('slug',$slug)->first();
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'image' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/image/', $imageName);
        }
        else{
            $imageName = $imageData->image;
        }

    $update =  Make::where('slug',$slug)->update([
        'name' =>$request->name,
        'status' =>$request->status,
        'image' => $imageName,
    ]);
    if($update > 0){
        return redirect()->route('admin.make.index')->with('success','Make Updated');
    }
    return redirect()->route('admin.make.index')->with('error','something went wrong');
    }
    public function delete($slug){
        $makes =  Make::where('slug',$slug)->first();
        if(!empty($makes)){
            $makes->delete();
            return redirect()->route('admin.make.index')->with('success','Make Deleted');
           }
           return redirect()->route('admin.make.index')->with('error','record not found');
        }
}
