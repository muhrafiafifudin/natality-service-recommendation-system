<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diseases')->insert([
            [
                'id' => 1,
                'disease' => 'Anemia',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'disease' => 'Keputihan',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'disease' => 'Pendarahan',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'disease' => 'Sakit Punggung',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'disease' => 'Sembelit',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
