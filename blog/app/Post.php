<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //mass assign

    protected $fillable = [
        'user_id',
        'title',
        'body',
    ];

    // db relantionship

    //user
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    

}
