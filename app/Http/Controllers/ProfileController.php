<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vehicle;

class ProfileController extends Controller
{
    public function profile(){
        $data ['title'] = 'Profile';
        $data ['heading'] = 'Profile';
        $data ['user'] = User::where('id' , auth()->user()->id)->firstorfail();
        $data ['vehicles'] = Vehicle::where('user_id' , auth()->user()->id)->orderBy('created_at' , 'DESC')->get();
        return view('pages.profile',$data);
}
public function update(Request $request){
    $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'address' => 'required',
    ]);
    $imageData = User::where('id',auth()->user()->id)->firstorfail();
    if($request->file('image')){
        $image = $request->file('image');
        $imageName = 'profile' . '-' . time() . '.' . $image->getClientOriginalExtension();
        $image->move('upload/user/', $imageName);
    }
    else{
        $imageName = $imageData->image;
    }
    $update = User::where('id', auth()->user()->id)->update([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'address' => $request->address,
        'image' => $imageName,
    ]);
    if($update > 0){
        return redirect()->back()->with('success','Profile Updated Successfully');
    }
    return redirect()->back()->with('error','Something Went Wrong');
}

public function paymentUpdate(Request $request){
    $update = User::where('id' , auth()->user()->id)->update([
        'card_number' => $request->card_number,
        'card_name' => $request->card_name,
        'expiry' => $request->expiry,
        'cvc' => $request->cvc,
    ]);
    if($update > 0){
        return redirect()->back()->with('success','Payment Updated Successfully');
    }
    return redirect()->back()->with('error','Something Went Wrong');
}
}
