<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ContributionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomNumber(),
            'user_id' => rand(1, 12),
            'client_id' => rand(1, 12),
            'agency_id' => rand(1, 20),
            'created_at' => $this->faker->dateTimeBetween('- 3 months', 'now'),
        ];
    }
}
