<?php

use Illuminate\Database\Seeder;

use App\User;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::findOrFail(1)->roles()->sync(1);
        User::findOrFail(2)->roles()->sync(2);
        User::findOrFail(3)->roles()->sync(2);
        User::findOrFail(4)->roles()->sync(2);
        User::findOrFail(5)->roles()->sync(2);
    }
}
