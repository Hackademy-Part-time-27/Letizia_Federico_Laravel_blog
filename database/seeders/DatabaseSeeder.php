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
        User::factory()->create([
            'name' => 'Federico',
            'email' => 'Federico@example.com',
            'password' => '123456789'
        ]);

        User::factory(19)->create();

        \App\Models\Article::factory(100)->create();

        
    }
}
