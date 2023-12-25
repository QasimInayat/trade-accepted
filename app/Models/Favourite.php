<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;
    protected $guarded = [];


    public static function countfavourite($vehicle_id){
        $countfavourite = Favourite::where(['user_id' => auth()->user()->id , 'vehicle_id' => $vehicle_id])->count();
        return $countfavourite;
    }

    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }


    public function user(){
        return $this->belongsTo(User::class);
    }
}
