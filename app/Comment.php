<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id', 'user_id', 'body'
    ];

    public function user(){
        return  $this->belongsto('App\User');
    }

    public function post(){
        return  $this->belongsto('App\Post');
    }

}
