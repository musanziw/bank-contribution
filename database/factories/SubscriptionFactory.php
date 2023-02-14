<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SubscriptionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'started_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'ended_at' => $this->faker->dateTimeBetween('noe', '+1 year'),
            'status' => $this->faker->boolean()
        ];
    }
}
