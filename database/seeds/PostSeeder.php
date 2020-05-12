<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
            'id' => 1,
            'subreddit_id' => 1,
            'user_id' => 1,
            'title' => Str::random(6),
            'body' => Str::random(20),
            // 'image' => '/...'
            ],

            [
            'id' => 2,
            'subreddit_id' => 2,
            'user_id' => 1,
            'title' => Str::random(6),
            'body' => Str::random(20),
            // 'image' => '/...'
            ],

            [
            'id' => 3,
            'subreddit_id' => 3,
            'user_id' => 2,
            'title' => Str::random(6),
            'body' => Str::random(20),
            // 'image' => '/...'
            ],

            [
            'id' => 4,
            'subreddit_id' => 2,
            'user_id' => 2,
            'title' => Str::random(6),
            'body' => Str::random(20),
            // 'image' => '/...'
            ],

            [
            'id' => 5,
            'subreddit_id' => 1,
            'user_id' => 2,
            'title' => Str::random(6),
            'body' => Str::random(20),
            // 'image' => '/...'
            ]
        ];

    }
}
