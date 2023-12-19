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

         \App\Models\User::factory()->create([
             'name' => 'Administrador',
             'email' => 'ti@barataodacarne.com.br',
             'password' => bcrypt('admb4r4t40**')
         ]);

        \App\Models\User::factory()->create([
            'name' => 'Refeitorio',
            'email' => 'refeitorio@barataodacarne.com.br',
            'password' => bcrypt('baratao@2023')
        ]);
    }
}
