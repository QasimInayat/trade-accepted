<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function from(){
        return $this->belongsTo(User::class,'from_id','id');
    }
    public function to(){
        return $this->belongsTo(User::class,'to_id','id');
    }
    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }
    public function isVehicle(){
        return $this->belongsTo(Vehicle::class);
    }
    public function thread(){
        return $this->belongsTo(Message::class,'thread_id');
    }
}
