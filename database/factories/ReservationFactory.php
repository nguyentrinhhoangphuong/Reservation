<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'city_id' => $this->faker->numberBetween(1, 10),
            'room_id' => $this->faker->numberBetween(1, 30),
            'status' => $this->faker->boolean(50),
            'day_in' => $this->faker->dateTimeBetween('-10 days', 'now'),
            'day_out' => $this->faker->dateTimeBetween('now', '+10 days'),
        ];
    }
}
