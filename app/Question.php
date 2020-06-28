<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Answer;

class Question extends Model
{
    protected $guarded = [];

    public function questionnaire()
    {
    	return $this->belongsTo(Questionnaire::class);
    }

    public function answers()
    {
    	return $this->hasMany(Answer::class);
    }
}
