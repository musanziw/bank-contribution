<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class BankFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'username' => $this->faker->userName(),
            'representative_name' => $this->faker->name(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'updated_at' => Carbon::now(),
        ];
    }
}
