<?php

use App\Models\Admin;
use App\Models\Gallery;
use App\Models\User;
use App\Models\Notification;



function admin(){
    $data = auth()->guard('admin')->user();
    return $data;
}

function userImage(){
    $userImage = User::where('id' , auth()->user()->id)->first();
    return $userImage;
}

function mainImage($vehicle_id){
    $image = Gallery::where('vehicle_id',$vehicle_id)->where('is_main',1)->first();
    if(!empty($image)){
    return $image->image;
    }else{
        return null;
    }
}

function sendNotification($id,$model,$event,$msg){
	$store = Notification::create(['event' => $event, 'loggable_id' => $id, 'loggable_model' => $model, 'msg' => $msg, 'user_id' => auth()->user()->id]);
	if(!empty($store)){
		return $store;
	}
	return false;
}

function notification(){
    $notification = Notification::where(['user_id' =>  auth()->user()->id , 'is_seen' => '0'])->orderBy('created_at' , 'DESC')->take(3)->get();
    return $notification;
}


function notificationCount(){
    $notificationCount = Notification::where('user_id' , auth()->user()->id)->count();
    return $notificationCount;
}

