<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category' => fake()->randomElement(['music', 'art', 'business', 'tech', 'agriculture', 'academia', 'charity', 'social' ]),
            'description' => fake()->sentence(),
        ];
    }
}
