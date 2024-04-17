<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Post::create([
            'user_id' => 2,
            'comment' => 'asdsadasdasdadsdasdasd',
        ]);

        \App\Models\Post::create([
            'user_id' => 2,
            'comment' => 'zzzzzzzzzzzzzzzzz',
        ]);

        \App\Models\Post::create([
            'user_id' => 2,
            'comment' => 'ccccccc',
        ]);
    }
}
