<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $table='quotes';
    protected $guarded=[];
    public $timestamps=false;
}
