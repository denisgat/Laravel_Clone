<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subreddit extends Model
{
    public function user(){
        $this->belongsto('App\User');
    }

    public function posts(){
        $this->hasMany('App\Post');
    }
}
