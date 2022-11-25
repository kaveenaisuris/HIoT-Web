<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patiant extends Model
{
    protected $fillable = [
        'user_id', 'doctor_id', 'allow_access','is_blocked'
    ];

    protected $with=['doctor'];
    public function user()
    {
       return $this->belongsTo(User::class,'user_id');
    }


    public function doctor()
    {
       return $this->belongsTo(User::class,'doctor_id');
    }
}
