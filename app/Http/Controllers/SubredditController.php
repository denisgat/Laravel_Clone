<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facade\Hash;
use App\Subreddit;

class SubredditController extends Controller
{

    // public function recipeIds ($recipe_id)
    // {
    //     return Direction::where('recipe_id', $recipe_id)->get();
    // }

    public function index (){
        $sub = Subreddit::latest()->get();
        return json_encode($sub);
    }


    public function show($sub){
        // $posts = $sub->posts;
        $posts = Subreddit::with('posts')->find($sub);
        return response()->json([ 
            'data'=>$posts
        ]);
    }

    public function create(Request $request){
        // dd($request);
        $input = ($request->all() == null ? json_decode($request->getContent(), true) : $request->all());

        $sub = Subreddit::create([
            'subredditname' => $input['subname'],
            'user_id' => $input['user_id'],
            'subredditdesc' =>$input['subdesc']
        ]);

    }



}
