<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_criterias')->insert([
            [
                'criteria_id' => 1,
                'sub_criteria' => '110/70 - 120/80 mmhg',
                'created_at' => Carbon::now()
            ],
            [
                'criteria_id' => 1,
                'sub_criteria' => '140/90 mmHg',
                'created_at' => Carbon::now()
            ],
            [
                'criteria_id' => 2,
                'sub_criteria' => '100 kali/menit (Rendah)',
                'created_at' => Carbon::now()
            ],
            [
                'criteria_id' => 2,
                'sub_criteria' => '110 - 160 kali/menit (Normal)',
                'created_at' => Carbon::now()
            ],
            [
                'criteria_id' => 2,
                'sub_criteria' => '180 kali/menit (Tinggi)',
                'created_at' => Carbon::now()
            ],
            [
                'criteria_id' => 3,
                'sub_criteria' => '12-16 gram/desiliter (Normal)',
                'created_at' => Carbon::now()
            ],
            [
                'criteria_id' => 3,
                'sub_criteria' => 'HB < 10-10,9 gram/desiliter (Anemia Ringan)',
                'created_at' => Carbon::now()
            ],
            [
                'criteria_id' => 3,
                'sub_criteria' => 'HB < 7-9,9 gram/desiliter (Anemia Sedang)',
                'created_at' => Carbon::now()
            ],
            [
                'criteria_id' => 3,
                'sub_criteria' => 'HB < 7 gram/desiliter (Anemia Tinggi)',
                'created_at' => Carbon::now()
            ],
            [
                'criteria_id' => 4,
                'sub_criteria' => 'IMT < 18.5 (berat badan rendah) : 13 - 18 kg',
                'created_at' => Carbon::now()
            ],
            [
                'criteria_id' => 4,
                'sub_criteria' => 'IMT 18.5 -24.9 (Berat badan normal) : 11 - 16 kg',
                'created_at' => Carbon::now()
            ],
            [
                'criteria_id' => 4,
                'sub_criteria' => 'IMT 25 - 29.9 (Kegemukan) : 7 - 11 Kg',
                'created_at' => Carbon::now()
            ],
            [
                'criteria_id' => 4,
                'sub_criteria' => 'IMT >30 (obesitas) : 5 - 9 kg',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
