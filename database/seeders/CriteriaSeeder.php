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
                'criteria' => 'Usia ibu hamil < 16th',
                'score' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Usia ibu hamil > 35th',
                'score' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Pernah Operasi SC',
                'score' => 8,
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Kurang darah',
                'score' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Bengkak pada muka / tungkai & tekanan darah tinggi',
                'score' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Hamil kembar 2 atau lebih',
                'score' => 4,
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Letak Sungsang',
                'score' => 8,
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Pendarahan dalam kehamilan',
                'score' => 8,
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Preeklamsia Berat / Kejang - Kejang',
                'score' => 8,
                'created_at' => Carbon::now()
            ],
            [
                'criteria' => 'Kehamilan lebih bulan',
                'score' => 4,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
