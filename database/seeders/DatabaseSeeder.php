<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        // User::factory()->create([
        //     'name' => 'Test',
        //     'email' => 'test@gmail.com',
        //     'password' =>Hash::make('123')
        // ]);

        // User::factory()->create([
        //     'name' => 'Sabrina',
        //     'email' => 'sabrina@gmail.com',
        //     'password' =>Hash::make('12345')
        // ]);
        
        $this->call([
            UsersTableSeeder::class,
        ]);
    }
}
