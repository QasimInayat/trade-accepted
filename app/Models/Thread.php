<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function from(){
        return $this->belongsTo(User::class);
    }
    public function to(){
        return $this->belongsTo(User::class);
    }
    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }
    public function message(){
        return $this->belongsTo(Message::class,'thread_id');
    }
}
