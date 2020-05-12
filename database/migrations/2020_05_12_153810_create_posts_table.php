<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();         
            $table->unsignedBigInteger('subreddit_id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('body');
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('subreddit_id')->references('id')->on('subreddits');
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('post_reddit_id_foreign')->references('id')->on('subreddits');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
