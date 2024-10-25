<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('portfolios')->insert([
            [
                'title' => 'Sample Portfolio 1',
                'short_description' => 'This is a short description for Sample Portfolio 1.',
                'description' => '<p>This is a detailed description for Sample Portfolio 1.</p>',
                'image' => 'portfolio_images/hasnain.jpg',
                'category_id' => 1, // Set to a valid category ID
                'user_id' => 1, // Set to a valid user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sample Portfolio 2',
                'short_description' => 'This is a short description for Sample Portfolio 2.',
                'description' => '<p>This is a detailed description for Sample Portfolio 2.</p>',
                'image' => 'portfolio_images/picture.jpg',
                'category_id' => 2, // Set to a valid category ID
                'user_id' => 1, // Set to a valid user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sample Portfolio 3',
                'short_description' => 'This is a short description for Sample Portfolio 3.',
                'description' => '<p>This is a detailed description for Sample Portfolio 3.</p>',
                'image' => 'portfolio_images/usama.png',
                'category_id' => 3, // Set to a valid category ID
                'user_id' => 2, // Set to a valid user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
