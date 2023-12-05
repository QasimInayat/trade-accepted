<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Gallery;
use App\Models\User;
use App\Models\Notification;

class FrontendController extends Controller
{
    public function index(){
        $data ['title'] = 'Index';
        $data ['heading'] = 'Home';
        $data ['vehicles'] = Vehicle::where('status' , 1)->orderBy('created_at' , 'DESC')->get();
        return view('index',$data);
    }
    public function detail($slug){
        $data ['title'] = 'Detail';
        $data ['heading'] = 'Detail';
        $data ['vehicle'] = Vehicle::where('slug',$slug)->firstorfail();
        $data['galleries'] = Gallery::where('vehicle_id' , $data['vehicle']->id)->get();
        return view('pages.detail',$data);
    }
    public function search(){
        $data ['title'] = 'Search';
        $data ['heading'] = 'Search';
        return view('pages.search',$data);
    }
    public function messenger(){
        $data ['title'] = 'Messenger';
        $data ['heading'] = 'Messenger';
        return view('pages.messenger',$data);
    }
    public function clientProfile(){
        $data ['title'] = 'Client Profile';
        $data ['heading'] = 'Client Profile';
        return view('pages.client-profile',$data);
    }
    public function notification(){
        $data ['title'] = 'Notification';
        $data ['heading'] = 'Notification';
        return view('pages.notification',$data);
    }
    public function updateNotification(Request $request , $id){
        $notification = Notification::find($id);
        if($notification){
            $notification->is_seen = '1';
            $notification->update();
            return response()->json(['status' => 200 , 'message' => 'Notification seen']);
        }else{
            return response()->json(['status' => 404 , 'message' => 'Notification Not Found']);
        }
    }
}
