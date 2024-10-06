<?php

namespace Database\Seeders;

use App\Models\Domain;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Domain::factory(10)->create();
        $this->call(DomainSeeder::class); // I used this because my seeder was seeding more number of records than 
        $this->call(DomainPhotosSeeder::class);
    }
}
