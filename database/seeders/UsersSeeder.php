<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{

    public function run(): void

    {
        User::create([
            'name' => 'User',
            'email' => 'user@test.com',
            'password' => bcrypt('123qaz'),
        ]);
    }
}
