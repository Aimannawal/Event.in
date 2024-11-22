<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Musik',
        ]);
        Category::create([
            'name' => 'Olahraga',
        ]);
        Category::create([
            'name' => 'Seni',
        ]);
        Category::create([
            'name' => 'Makanan',
        ]);
        Category::create([
            'name' => 'Teknologi',
        ]);
        Category::create([
            'name' => 'Bisnis',
        ]);
        Category::create([
            'name' => 'Kesehatan',
        ]);
        Category::create([
            'name' => 'Edukasi',
        ]);
    }
}

