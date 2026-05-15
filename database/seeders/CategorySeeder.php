<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Novel', 'Komik', 'Teknologi', 'Sains', 'Sejarah'];

    foreach ($categories as $cat) {
    DB::table('categories')->insert([
        'category' => $cat
    ]);
}
    }
}
