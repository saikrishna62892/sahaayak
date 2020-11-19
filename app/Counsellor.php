<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    //
    protected $guarded=[];
    protected $table = 'counsellor';
    protected $fillable = ['name','email','college_id','qualification','bio','achievements','image'];
}
