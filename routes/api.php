<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function(){
    return User::all();
});

Route::group(['middleware' => 'auth:api'], function(){
     Route::post('/logout', 'AuthController@logout');
     Route::post('/subreddits/create', 'SubredditController@create');
     Route::post('/post/create', 'PostController@create');
});

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');

Route::get('/allposts','PostController@index');
Route::get('/subreddits','SubredditController@index');
Route::get('/subreddits/{id}', 'SubredditController@show');



