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
            'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
            'name' => 'Griki',
            'email' => 'griki@gmail.com',
            'password' => Hash::make('123'),
        ]);

        foreach([
            'Comfort',
            'Business',
            'Élite'
        ] as $title) {
            DB::table('cats')->insert([
                'title' => $title,
            ]);
        }

        $faker = Faker::create('en_US');

        foreach(range(1, 6) as $_) {
            $catId = rand(1, 3);
            DB::table('cars')->insertGetId([
                'title' => $faker->state,
                'driver' => $faker->lastName($gender = 'male') ,
                'cat_id' => $catId
            ]);

            
        }

    
    }
}
