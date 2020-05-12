<?php

use Illuminate\Database\Seeder;

use App\Subreddit;
use App\Posts;

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
            SubredditSeeder::class,
            PostsSeeder::class

        ]);
        
        
    }
}
