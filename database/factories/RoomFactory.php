<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'number' => $this->faker->numberBetween(001, 999),
            'type' => $this->faker->randomElement(['standard', 'deluxe', 'luxury', 'suite']),
            'description' => $this->faker->text(200),
            'beds' => $this->faker->numberBetween(1, 4),
            'occupancy' => $this->faker->numberBetween(1, 8),
            'price_per_hour' => $this->faker->numberBetween(1000, 9999),
            'status' => 'available'
        ];
    }
}
