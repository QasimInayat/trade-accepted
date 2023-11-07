<?php

use App\Models\Admin;



function admin(){
    $data = auth()->guard('admin')->user();
    return $data;
}
