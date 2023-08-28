<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PreventionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preventions')->insert([
            [
                'sub_criteria_id' => 1,
                'prevention' => 'Rentang tekanan darah yang dianggap normal atau optimal. Rentang ini menunjukkan bahwa tekanan darah Anda berada dalam kisaran yang sehat, yang berpotensi memiliki manfaat positif bagi kesehatan jangka panjang. Lakukan Pemeriksaan Rutin dan Pertahankan Gaya Hidup Sehat.',
                'created_at' => Carbon::now()
            ],
            [
                'sub_criteria_id' => 1,
                'prevention' => '',
                'created_at' => Carbon::now()
            ],
            [
                'sub_criteria_id' => 1,
                'prevention' => '',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
