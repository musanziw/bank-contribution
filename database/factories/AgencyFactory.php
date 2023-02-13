<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AgencyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'agency_manager_name' => $this->faker->name,
            'mobile' => $this->faker->phoneNumber,
            'bank_id' => $this->faker->numberBetween(1, 10),
            'town_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
