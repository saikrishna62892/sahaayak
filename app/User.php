<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Questionnaire;
use App\Survey;
use App\Volunteer;
use App\Diary;
use App\Appointment;
use App\Comment;
use App\Worry;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded=[];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }

    public function volunteer()
    {
        return $this->hasOne(Volunteer::class);
    }

    public function stories()
    {
        return $this->hasMany(Story::class);
    }


    public function talks()
    {
        return $this->hasMany(Talk::class);
    }

    public function diary()
    {
        return $this->hasMany(Diary::class);

    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function worries()
    {
        return $this->hasMany(Worry::class);
    }
}
