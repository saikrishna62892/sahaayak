<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
class Answer extends Model
{
    protected $guarded = [];

    public function question()
    {
    	return $this->belongsTo(Question::class);
    }
}
