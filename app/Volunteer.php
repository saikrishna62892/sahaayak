<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Appointment;

class Volunteer extends Model
{
	protected $guarded = [];
	
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
