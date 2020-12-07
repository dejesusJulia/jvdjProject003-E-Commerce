<?php

use Illuminate\Database\Seeder;
use App\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Admin',
                'email' => 'juliadj13@gmail.com',
                'user_role' => '1',
                'password' => bcrypt('password')
            ],

            [
                'name' => 'Client',
                'email' => 'julsvdj01@gmail.com',
                'user_role' => '0',
                'password' => 'password'
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
