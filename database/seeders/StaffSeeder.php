<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $staff = [
            'username' => 'staff1',
            'email' => 'staff1@staff.com',
            'password' => bcrypt('123456'),
            'role' => 'staff'
        ];

        \App\Models\User::create($staff);
    }
}
