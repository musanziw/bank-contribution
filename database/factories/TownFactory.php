<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TownFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->city(),
        ];
    }
}
