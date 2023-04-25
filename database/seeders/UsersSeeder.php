<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
        [
            'name' => 'Ana Paula',
            'email' => 'ana@email.com',
            'password' => bcrypt('8852'),
        ]);
    }
}
