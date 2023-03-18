<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'avatar' => 'https://cdn-icons-png.flaticon.com/512/1946/1946429.png',
            'email' => 'admin@hachinet.com',
            'password' => Hash::make('hachinet123@'),
        ]);
    }
}
