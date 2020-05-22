<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PostsCollection;
use App\Post;

class PostController extends Controller
{

    public function index ()
    {
        return new PostsCollection(Post::with(['user', 'subreddit', 'comment'])->get());
    }

    public function create(Request $request){
        // dd($request);
        $input = ($request->all() == null ? json_decode($request->getContent(), true) : $request->all());

        $post = Post::create([
            'title' => $input['title'],
            'user_id' => $input['user_id'],
            'body' =>$input['body'],
            'subreddit_id' =>$input['subreddit_id'],
            'image' => $input['img']
        ]);

        return new PostsCollection(Post::with(['user', 'subreddit', 'comment'])->get());

    }


}
