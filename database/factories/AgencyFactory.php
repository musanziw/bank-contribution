<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class AgencyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'manager_name' => $this->faker->name,
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}
