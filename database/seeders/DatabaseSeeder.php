<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Agency;
use App\Models\Bank;
use App\Models\Client;
use App\Models\Role;
use App\Models\Service;
use App\Models\Subscription;
use App\Models\Town;
use App\Models\User;
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
        Bank::factory(1)->has(Subscription::factory(1))->create();
        Role::upsert([
            ['name' => 'Caissier'], ['name' => 'Collecteur']
        ], ['name']);
        Service::upsert([
            ['name' => 'ChatBot'],
            ['name' => 'Cotisation'],
        ], ['name']);
        User::factory(12)->has(Client::factory(1))->create();
        Town::factory(10)->has(Agency::factory(2))->create();
    }
}
