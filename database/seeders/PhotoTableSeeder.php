<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo ảnh cho TouristSpot (100 spots)
        foreach (range(1, 100) as $spotId) {
            Photo::factory()->create([
                'photoable_type' => 'App\\Models\\TouristSpot',
                'photoable_id' => $spotId,
                'path' => fake()->imageUrl(800, 400, 'city'),
            ]);
        }

        // Tạo ảnh cho Room (200 rooms)
        foreach (range(1, 200) as $roomId) {
            Photo::factory()->create([
                'photoable_type' => 'App\\Models\\Room',
                'photoable_id' => $roomId,
                'path' => fake()->imageUrl(800, 400, 'nightlife'),
            ]);
        }

        // Tạo ảnh cho User (10 users)
        foreach (range(1, 10) as $userId) {
            Photo::factory()->create([
                'photoable_type' => 'App\\Models\\User',
                'photoable_id' => $userId,
                'path' => fake()->imageUrl(800, 400, 'people'),
            ]);
        }
    }
}
