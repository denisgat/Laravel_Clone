<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PostsCollection;
use App\Post;

class PostController extends Controller
{

    public function index ()
    {
        return new PostsCollection(Post::with(['user', 'subreddit'])->get());
    }

    // public function getRecipesByUser ($userId) 
    // {
    //     return new Recipes(Recipe::with(['user', 'tags', 'directions', 'ingredients'])->where('user_id', $userId)
    //     ->get());
    // }


}
