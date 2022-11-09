<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->randomElement(['bronze', 'silver', 'gold', 'platinum']),
            'price' => fake()->randomElement([10000, 15000, 25000, 35000]),
            'ticket_slots' => fake()->randomElement([300, 800, 1500, 3000]),
            'discount' => fake()->randomElement([10, 50, 70, 80])
        ];
    }
}
