<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Agency;
use App\Models\Bank;
use App\Models\Subscription;
use App\Models\Town;
use Database\Factories\SubscriptionFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Bank::factory(1)->has(Subscription::factory(1))->create();
        Agency::factory(10)->has(Town::factory(1))->create();
    }
}
