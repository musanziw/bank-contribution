<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriptionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'started_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'ended_at' => fake()->dateTimeBetween('now', '+1 year'),
            'status' => fake()->boolean()
        ];
    }
}
