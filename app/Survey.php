<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Questionnaire;
class Survey extends Model
{
	protected $guarded = [];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function questionnaire()
    {
    	return $this->belongsTo(Questionnaire::class);
    }
}
