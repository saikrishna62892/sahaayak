<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Volunteer;

class Appointment extends Model
{
    protected $guarded = [];
    protected $table='appointments';

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function volunteer()
    {
    	return $this->belongsTo(Volunteer::class);
    }
}
