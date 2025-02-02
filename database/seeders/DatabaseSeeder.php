<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AddressTableSeeder::class,
            ArticleTableSeeder::class,
            CityTableSeeder::class,
            CommentTableSeeder::class,
            LikeableTableSeeder::class,
            NotificationTableSeeder::class,
            PhotoTableSeeder::class,
            ReservationTableSeeder::class,
            RoleTableSeeder::class,
            RoleUserTableSeeder::class,
            RoomTableSeeder::class,
            TouristSpotTableSeeder::class,
            UserTableSeeder::class,
        ]);
    }
}
