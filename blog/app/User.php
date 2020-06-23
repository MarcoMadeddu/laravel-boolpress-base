<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

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

    //db relationship

    //infoUsers (one to one)
    public function info()
    {
        return $this->hasOne('App\infoUser');
    }

    //post (one to many)
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    //feedback
    public function feedbacks()
    {
        return $this->hasMany('App\Feedback');
    }
}
