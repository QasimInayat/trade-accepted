<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;

class UserController extends Controller
{
    public function user(){
        $data['title'] = 'User List';
        $data['users'] = User::orderBy('created_at' , 'DESC')->get();
        return view('admin.pages.user.index' , $data);
    }

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
            'full_name' => $request->first_name.' '.$request->last_name,
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
            return redirect()->route('admin.user')->with('success' , 'User Profile Updated');
        }
        return redirect()->back()->with('error' , 'Something Went Wrong');
    }
    public function edit($id){
        $user = User::find($id);
        if($user){
            return response()->json(['status' => 200 , 'user' => $user]);
        }else{
            return response()->json(['status' => 404 , 'user' => 'user Not Found']);
        }
    }
    public function Banupdate(Request $request , $id){
        $validator = Validator::make($request->all(),[
            'is_ban' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(['status' => 400 , 'errors' => $validator->messages()]);
        }else{
            $user = User::find($id);
            if($user){
                $user->is_ban = $request->input('is_ban');
                $user->update();
                return response()->json(['status' => 200 , 'message' => 'User Updated Successfully']);
            }else{
                return response()->json(['status' => 404 , 'user' => 'user Not Found']);
            }

        }
    }
}
