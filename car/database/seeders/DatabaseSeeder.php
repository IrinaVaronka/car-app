<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'kiwi',
            'email' => 'kiwi@gmail.com',
            'role' => 1,
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Griki',
            'email' => 'griki@gmail.com',
            'password' => Hash::make('123'),
        ]);

    
    }
}
