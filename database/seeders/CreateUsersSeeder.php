<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users =
        [
            [
                'name' => 'User',
                'email' => 'user@chirags.in',
                'password' => Hash::make('user@chirags.in'),
                'type' => 0,
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@chirags.in',
                'password' => Hash::make('admin@chirags.in'),
                'type' => 1,
            ],
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@chirags.in',
                'password' => Hash::make('superadmin@chirags.in'),
                'type' => 2,
            ]
        ];
        foreach($users as $key => $user)
        {
            User::create($user);
        }
    }
}
