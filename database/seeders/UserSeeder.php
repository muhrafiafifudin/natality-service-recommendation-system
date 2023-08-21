<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
            'created_at' => Carbon::now()
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User',
            'address' => 'Surakarta',
            'email' => 'user@example.com',
            'password' => bcrypt('12345678'),
            'created_at' => Carbon::now()
        ]);

        $user->assignRole('user');
    }
}
