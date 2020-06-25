<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;
use App\Question;
use App\Answer;
use App\Survey;
class Questionnaire extends Model
{
    protected $guarded = [];

    public function questions()
    {
    	return $this->hasMany(Question::class);
    }

    public function surveys()
    {
    	return $this->hasMany(Survey::class);
    }
}
