<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Appointment;

class Casehistory extends Model
{
    protected $table='casehistories';
    protected $guarded=[];
    protected $fillable = ['appointment_id','remarks'];

    public function appointment()
    {
    	return $this->belongsTo(Appointment::class);
    }
}
