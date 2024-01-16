<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'المدير: مصطفي خالد',
            'email' => 'mostafa.sarhan@yahoo.com',
            'password' => Hash::make('p@ssw0rd'),
        ]);
        DB::table('users')->insert([
            'name' => 'المدير: عبد العزيز',
            'email' => 'Abdulazizhuraysi29@gmail.com',
            'password' => Hash::make('Admin102030#'),
        ]);
    }
}
