<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_id' => Post::factory(),
            'batch_no' => fake()->randomNumber(1, 9999),
            'quantity' => fake()->randomElement([300, 800, 1500, 3000]),
            'status' => fake()->randomElement([1, 0]),
            'discount' => fake()->randomElement([10, 100]),
            'ticket_categories' => json_encode([
                [
                    "ticket_type" => 'early-birds',
                    "price" => 1000
                ],
                [
                    "ticket_type" => 'regular',
                    "price" => 2000
                ],
                [
                    "ticket_type" => 'vip',
                    "price" => 5000,
                ],
                [
                    "ticket_type" => 'vvip',
                    "price" => 10000
                ]
            ]),
        ];
    }
}
