<?php

use App\Models\Admin;
use App\Models\Gallery;
use App\Models\User;



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
