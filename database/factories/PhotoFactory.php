<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = $this->faker->randomElement(['App\\Models\\TouristSpot', 'App\\Models\\Room', 'App\\Models\\User']);
        $pathCategory = $type === 'App\\Models\\User' ? 'people' : ($type === 'App\\Models\\Room' ? 'nightlife' : 'city');

        return [
            'photoable_type' => $type,
            'photoable_id' => $this->faker->numberBetween(1, 10),
            'path' => $this->faker->imageUrl(800, 400, $pathCategory),
        ];
    }
}
