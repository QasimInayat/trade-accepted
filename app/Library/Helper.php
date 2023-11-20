<?php

use App\Models\Admin;
use App\Models\Gallery;



function admin(){
    $data = auth()->guard('admin')->user();
    return $data;
}

function mainImage($vehicle_id){
    $image = Gallery::where('vehicle_id',$vehicle_id)->where('is_main',1)->first();
    if(!empty($image)){
    return $image->image;
    }else{
        return null;
    }
}
