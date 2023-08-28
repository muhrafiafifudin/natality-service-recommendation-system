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
                'criteria' => 'Tekanan Tensi',
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Tekanan Denyut Jantung Janin',
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Hemoglobin',
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Berat Badan Ibu Hamil',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
