<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $users = [
            [
                'id'            => 1,
                'name'          => 'Admin',
                'email'         => 'admin@admin.com',
                'phone'         => '(123) 456-7890',
                'password' 		=> Hash::make('password'),
                //'password'       => '$2y$10$XH232IuTQCcPEkbswdv4UeGvuvnj26M1HLKkXtN4Dgx5gyI1WCIMi',
                'remember_token' => null,
            ],

            [
                'id'            => 2,
                'name'          => 'Agent4',
                'email'         => 'agent4@agent4.com',
                'phone'         => '(345) 456-0009',
                'password' 		=> Hash::make('password'),
                //'password'       => '$2y$10$XH232IuTQCcPEkbswdv4UeGvuvnj26M1HLKkXtN4Dgx5gyI1WCIMi',
                'remember_token' => null,
            ],

            [
                'id'            => 3,
                'name'          => 'Agent1',
                'email'         => 'agent1@agent1.com',
                'phone'         => '(123) 189-9032',
                'password'      => Hash::make('password'),
                //'password'       => '$2y$10$XH232IuTQCcPEkbswdv4UeGvuvnj26M1HLKkXtN4Dgx5gyI1WCIMi',
                'remember_token' => null,
            ],

            [
                'id'            => 4,
                'name'          => 'Agent2',
                'email'         => 'agent2@agent2.com',
                'phone'         => '(123) 648-7568',
                'password'      => Hash::make('password'),
                //'password'       => '$2y$10$XH232IuTQCcPEkbswdv4UeGvuvnj26M1HLKkXtN4Dgx5gyI1WCIMi',
                'remember_token' => null,
            ],

            [
                'id'            => 5,
                'name'          => 'Agent3',
                'email'         => 'agent3@agent3.com',
                'phone'         => '(123) 789-4563',
                'password'      => Hash::make('password'),
                //'password'       => '$2y$10$XH232IuTQCcPEkbswdv4UeGvuvnj26M1HLKkXtN4Dgx5gyI1WCIMi',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
