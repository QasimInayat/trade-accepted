<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile($id){
        $data['title'] = 'User Profile';
        $data['profile'] = User::where('id',$id)->firstorfail();
        return view('admin.pages.user.profile',$data);
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required',
            'phone' => 'required|min:1|max:191',
            'address' => 'required|min:1|max:191',
            'card_number' => 'required|min:1|max:191',
            'expiry' => 'required|min:1|max:11',
            'cvc' => 'required|min:1|max:11',
        ]);
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'user' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/user/', $imageName);
        }
        $store = CandidateProfile::create([
            'phone' => $request->phone,
            'address' => $request->address,
            'card_number' => $request->card_number,
            'expiry' => $request->expiry,
            'cvc' => $request->cvc,
            'image' => $imageName,
        ]);
        if(!empty($store)){
            return redirect()->back()->with('success' , 'User Profile Created');
        }else{
            return redirect()->back()->with('error' , 'Something Went Wrong');
        }
    }
    public function update(Request $request , $id){
        $request->validate([
            'first_name' => 'required|min:1|max:191',
            'last_name' => 'required|min:1|max:191',
            'email' => 'required|min:1|max:191',
            'phone' => 'required|min:1|max:191',
            'address' => 'required|min:1|max:191',
            'card_number' => 'required|min:1|max:191',
            'expiry' => 'required|min:1|max:11',
            'cvc' => 'required|min:1|max:11',
        ]);
        $imageData =   User::where('id',$id)->first();
        if($request->file('image')){
            $image = $request->file('image');
            $imageName = 'user' . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move('upload/user/', $imageName);
        }
        else{
            $imageName = $imageData->image;
        }
        $update = User::where('id' , $id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'card_number' => $request->card_number,
            'expiry' => $request->expiry,
            'cvc' => $request->cvc,
            'image' => $imageName,
        ]);
        if($update > 0){
            return redirect()->back()->with('success' , 'User Profile Updated');
        }
        return redirect()->back()->with('error' , 'Something Went Wrong');
    }
}
