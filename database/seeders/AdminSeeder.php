<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'role' => 'admin'
        ];

        \App\Models\User::create($admin);
    }
}
