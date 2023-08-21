<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals')->insert([
            [
                'hospital' => 'RSU Islam Cawas',
                'created_at' => Carbon::now()
            ],
            [
                'hospital' => 'RS PKU Muhammadiyah Sukoharjo',
                'created_at' => Carbon::now()
            ],
            [
                'hospital' => 'Rumah Sakit Nirmala Suri',
                'created_at' => Carbon::now()
            ],
            [
                'hospital' => 'Dr. Oen Solo Baru',
                'created_at' => Carbon::now()
            ],
            [
                'hospital' => 'Rumah Sakit Indriati',
                'created_at' => Carbon::now()
            ],
            [
                'hospital' => 'RSUD Dr. Moewardi',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
