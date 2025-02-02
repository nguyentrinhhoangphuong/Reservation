<?php

namespace Database\Seeders;

use App\Models\Likeable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikeableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Likeable::factory()->count(40)->create();
    }
}
