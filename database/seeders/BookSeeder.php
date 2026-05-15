<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
$faker = Faker::create();

for ($i = 1; $i <= 50; $i++) {
    DB::table('books')->insert([
        'title' => $faker->sentence(3),
        'author' => $faker->name,
        'year' => rand(2000, 2024),
        'publisher' => $faker->company,
        'city' => $faker->city,
        'bookshelf_id' => rand(1,10),
        'category_id' => rand(1,5),
        'created_at' => now(),
        'updated_at' => now(),
    ]);
}
    }
}
