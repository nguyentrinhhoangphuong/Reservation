<?php

namespace Database\Seeders;

use App\Models\TouristSpot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TouristSpotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TouristSpot::factory()->count(10)->create();
    }
}
