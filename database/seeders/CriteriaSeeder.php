<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('criterias')->insert([
            [
                'criteria' => 'Usia',
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Keluhan',
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Tensi',
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Persalinan',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
