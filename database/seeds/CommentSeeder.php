<?php

use Illuminate\Database\Seeder;

use App\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commentArray = [
            [
            'id' => 1,
            'user_id' => 1,
            'post_id' => 1,
            'body' => Str::random(30),
            ],
            [
            'id' => 2,
            'user_id' => 1,
            'post_id' => 4,
            'body' => Str::random(30),
             ],
            [
            'id' => 3,
            'user_id' => 2,
            'post_id' => 2,
            'body' => Str::random(30),
            ],
            [
            'id' => 4,
            'user_id' => 3,
            'post_id' => 5,
            'body' => Str::random(30),
            ],
            [
            'id' => 5,
            'user_id' => 3,
            'post_id' => 1,
            'body' => Str::random(30),
            ],

        ];

        foreach ($commentArray as &$comment) {
            Comment::create($comment);
        }

    }
}
