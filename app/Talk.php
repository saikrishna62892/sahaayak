<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Talk extends Model
{
	protected $table='talks';
    protected $guarded=[];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
