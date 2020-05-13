<?php

use Illuminate\Database\Seeder;
use App\Subreddit;


class SubredditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subredditArray = [
            [
            'id' => 1,
            'subredditname' => 'Cars',
            'user_id' => 1
            ],
            [
            'id' => 2,
            'subredditname' => 'Motorcycles',
            'user_id' => 1
            ],
            [
            'id' => 3,
            'subredditname' => 'News',
            'user_id' => 2
            ]
        ];


        foreach ($subredditArray as &$Subreddit) {
            Subreddit::create($Subreddit);
        }

    }
}
