<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Appointment;
class Counsellor extends Model
{
    //
    protected $guarded=[];
    protected $table = 'counsellors';
    protected $fillable = ['name','email','college_id','qualification','bio','achievements','image','calendar_url'];
	
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
