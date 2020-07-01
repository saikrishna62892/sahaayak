<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Diary extends Model
{
    protected $table="diary";
    protected $guarded=[];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
