<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Appointment;
use Illuminate\Notifications\Notifiable;

class Counsellor extends Model
{
    //
    protected $guarded=[];
	
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
