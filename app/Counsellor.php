<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    //
    protected $guarded=[];
    protected $table = 'counsellors';
    protected $fillable = ['name','email','college_id','qualification','bio','achievements','image','calendar_url'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
