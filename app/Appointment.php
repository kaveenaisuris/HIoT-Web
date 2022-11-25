<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'doctor_id', 'date', 'message','status','user_id'
    ];

    protected $with = [
        'user','doctor'
    ];

    public function user()
    {
       return $this->belongsTo(User::class,'user_id','id');
    }
    public function doctor()
    {
       return $this->belongsTo(User::class,'doctor_id','id');
    }
}
