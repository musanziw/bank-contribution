<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ClientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'account_number' => $this->faker->randomNumber(8),
            'birthdate' => fake()->dateTimeBetween('-60 years', '-18 years'),
            'sex' => $this->faker->randomElement(['F', 'M']),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
