<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->truncate();

        User::create([
            'name' => 'Admin User',
            'email' => 'admin1234@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user1234@user.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);
    }
}
