<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'title', 'hospital', 'district','experience','appointed_year','medical_id','speciality','web','mobile_no','user_id'
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
