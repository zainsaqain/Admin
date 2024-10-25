<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            ['name' => 'Web Development'],
            ['name' => 'Graphic Design'],
            ['name' => 'Digital Marketing'],
            ['name' => 'Photography'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
