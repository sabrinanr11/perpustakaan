<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' =>'admin@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        Member::create([
            'nisn' => '22222',
            'fullname' => 'Sabrina',
            'email' =>'admin@gmail.com',
            'phone_number' => ('11111111'),
        ]);

    }
}
