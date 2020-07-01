<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Story extends Model
{
    protected $table='stories';
    protected $guarded=[];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
