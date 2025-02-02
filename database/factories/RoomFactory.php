<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_number' => $this->faker->unique()->numberBetween(1, 30),
            'room_size' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->numberBetween(100, 600),
            'description' => $this->faker->paragraph,
            'tourist_spots_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
