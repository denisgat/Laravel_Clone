<?php

use Illuminate\Database\Seeder;

use App\Subreddit;
use App\Posts;
use App\Comments;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SubredditSeeder::class,
            PostSeeder::class,
            CommentSeeder::class

        ]);
        
        
    }
}
