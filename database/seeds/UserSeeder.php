<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersArray = [
            [
            'id' => 1,
            'name' => 'denis',
            'email' => 'denisgatotho@gmail.com',
            'password' => Hash::make('123')
            ],
            [
            'id' => 2,
            'name' => 'joe',
            'email' => 'joegatotho@gmail.com',
            'password' => Hash::make('123')
            ],
            [
            'id' => 3,
            'name' => 'billy',
            'email' => 'billygatotho@gmail.com',
            'password' => Hash::make('123')
            ],
        ];
                
            foreach ($usersArray as &$user) {
                User::create($user);
            }
        
    }
}
