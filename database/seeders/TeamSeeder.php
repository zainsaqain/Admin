<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            [
                'name' => 'Team Alpha',
                'description' => 'Team Alpha is responsible for product development and research.',
                'image' => 'halo.jpg', // Store only the filename
                'user_id' => 1, // Set to a valid user ID
            ],
            [
                'name' => 'Team Beta',
                'description' => 'Team Beta handles marketing and customer outreach.',
                'image' => 'show.jpg', // Store only the filename
                'user_id' => 1, // Set to a valid user ID
            ],
            [
                'name' => 'Team Gamma',
                'description' => 'Team Gamma oversees quality control and testing.',
                'image' => 'saqlain.jpg', // Store only the filename
                'user_id' => 2, // Set to a valid user ID
            ],
        ]);
    }
}
