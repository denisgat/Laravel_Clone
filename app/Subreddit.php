<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subreddit extends Model
{

    protected $fillable = [
        'subredditname', 'subredditdesc', 'user_id',
    ];

    public function user(){
        return  $this->belongsto('App\User');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }
}
