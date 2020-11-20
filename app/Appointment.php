<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Volunteer;
use App\Casehistory;

class Appointment extends Model
{
    protected $guarded = [];
    protected $table='appointments';
    protected $fillable =   ['name','college_id','department','gender','appointment_type','faculty_advisor','counsellor_name','date','slot','message'];

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
