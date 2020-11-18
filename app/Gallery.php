<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $guarded=[];
    protected $table = 'galleries';
    protected $fillable = ['image','caption','paragraph'];
}
