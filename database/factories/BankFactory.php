<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class BankFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake('fr_FR')->name,
            'email' => fake('fr_FR')->unique()->safeEmail,
            'username' => fake('fr_FR')->unique()->userName,
            'mobile' => fake('fr_FR')->unique()->phoneNumber,
            'address' => fake('fr_FR')->address,
            'representative_name' => fake('fr_FR')->name,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

}
