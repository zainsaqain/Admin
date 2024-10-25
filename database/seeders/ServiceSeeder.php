<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Web Development',
                'description' => 'We build responsive and efficient websites.',
                'image' => 'services/halo.jpg',
                'user_id' => 1, // Replace with actual user ID
            ],
            [
                'name' => 'Graphic Design',
                'description' => 'Creating stunning visuals for your brand.',
                'image' => 'services/1729009465.jpg',
                'user_id' => 1, // Replace with actual user ID
            ],
            [
                'name' => 'SEO Optimization',
                'description' => 'Optimizing your content for search engines.',
                'image' => 'services/1729009016.png',
                'user_id' => 2, // Replace with actual user ID
            ],
        ]);
    }
}
