<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function from(){
        return $this->belongsTo(User::class,'from_id');
    }
    public function to(){
        return $this->belongsTo(User::class,'to_id');
    }
    public function vehicle(){
        return $this->belongsTo(Vehicle::class,'vehicle_id');
    }
    public function message(){
        return $this->belongsTo(Message::class,'thread_id');
    }
}
