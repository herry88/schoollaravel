<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user data
        $users = [
            [
                'name'=>'narendra',
                'email'=>'admin@mail.com',
                'password'=>Hash::make('password'),
                'level'=>'admin'
            ]];
            foreach ($users as $user) {
                User::create($user);
            }

    }
}
