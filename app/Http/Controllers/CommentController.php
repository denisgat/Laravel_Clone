<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PostsCollection;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function create(Request $request){
        // dd($request);
        $input = ($request->all() == null ? json_decode($request->getContent(), true) : $request->all());

        $comment = Comment::create([
            'user_id' => $input['user_id'],
            'body' =>$input['body'],
            'post_id' =>$input['post_id']
        ]);
        
        return new PostsCollection(Post::with(['user', 'subreddit', 'comment'])->get());
    }
}
