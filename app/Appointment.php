<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Volunteer;
use App\Casehistory;

class Appointment extends Model
{
    protected $guarded = [];
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function volunteer()
    {
    	return $this->belongsTo(Volunteer::class);
    }
    public function counsellor()
    {
        return $this->belongsTo(Counsellor::class);
    }
    public function casehistory()
    {
        return $this->hasOne(Casehistory::class);
    }
}
