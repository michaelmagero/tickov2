<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'title' => fake()->word(),
            'poster' => fake()->imageUrl(),
            'description' => fake()->sentence(),
            'location' => fake()->randomElement(['Uhuru gardens', 'Nyayo stadium', 'Ngong racecourse', 'Kasarani stadium', 'Karen Water Front']),
            'date' => fake()->date(),
            'status' => fake()->randomElement([1, 0]),
//            $table->integer('likes')->nullable();
//            $table->integer('shares')->nullable();
//            $table->boolean('feature_status')->nullable();
//            $table->boolean('trending_status')->nullable();
//            $table->boolean('category_trending_status')->nullable();
        ];
    }
}
