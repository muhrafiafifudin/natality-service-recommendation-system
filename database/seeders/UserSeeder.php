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
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'created_at' => Carbon::now()
        ]);

        $admin->assignRole('admin');

        $users = [
            [
                'name' => 'Ihsan Dwi Asani',
                'address' => 'Jlumbang RT 02/05',
                'email' => 'ihsan@gmail.com',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Darsih',
                'address' => 'Nayan RT 02/06 ',
                'email' => 'darsih@gmail.com',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Eni Astuti',
                'address' => 'Ngentak',
                'email' => 'eni@@gmail.com',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Tri Hastuti',
                'address' => 'Bugel ',
                'email' => 'tri@gmail.com',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Ambarwati',
                'address' => 'Banaran RT 03/03',
                'email' => 'ambarwati@gmail.com',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now()
            ],
        ];

        foreach ($users as $user) {
            $user = User::create([
                'name' => $user['name'],
                'address' => $user['address'],
                'email' => $user['email'],
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now()
            ]);

            $user->assignRole('user');
        }
    }
}
