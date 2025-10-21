<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Resepsionis',
            'email' => 'resepsionis@paamurang.com',
            'password' => Hash::make('password123'),
        ]);
    }
}