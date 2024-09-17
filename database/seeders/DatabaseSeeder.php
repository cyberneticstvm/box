<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'name' => 'Move N Store',
            'username' => 'movenstore',
            'email' => 'info@moveinstore.com',
            'mobile' => '+971548882525',
            'password' => bcrypt('0548882525'),
        ]);
    }
}
