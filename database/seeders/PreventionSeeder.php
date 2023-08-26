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
                'disease_id' => 1,
                'prevention' => 'Mengonsumsi makanan yang kaya zat besi ,seperti telur, daging merah, sayuran hijau, kacang kacangan',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 1,
                'prevention' => 'Mengonsumsi makanan yang mengandung vitamin b12 tinggi, seperti susu dan produk olahannya , tempe dan tahu',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 1,
                'prevention' => 'Memenuhi kebutuhan vitamin C harian dengan mengonsumsi buah dan sayur',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 2,
                'prevention' => 'Mencuci tangan sebelum menyentuh area kewanitaan',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 2,
                'prevention' => 'Hindari cuci vagina',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 2,
                'prevention' => 'Gunakan panty liner',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 2,
                'prevention' => 'Gunakan pakaian yang menyerap keringat',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 2,
                'prevention' => 'Hindari pembersih vagina mengandung parfum',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 2,
                'prevention' => 'Perhatikan cara membersihkan vagina',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 2,
                'prevention' => 'Konsumsi makanan sehat',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 2,
                'prevention' => 'Hindari berendam terlalu lama',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 2,
                'prevention' => 'Keringkan area vagina setelah mandi',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 3,
                'prevention' => 'Istirahat total. Ibu hamil disarankan untuk berbaring dan beristirahat total saat mengalami perdarahan',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 3,
                'prevention' => 'Hindari berhubungan intim',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 3,
                'prevention' => 'Gunakan pembalut',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 3,
                'prevention' => 'Perhatikan warna darah',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 4,
                'prevention' => 'Pijat',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 4,
                'prevention' => 'Kompres punggung',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 4,
                'prevention' => 'Perbaiki postur tubuh',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 4,
                'prevention' => 'Olahraga',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 4,
                'prevention' => 'Akupuntur',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 4,
                'prevention' => 'Chiropractic',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 4,
                'prevention' => 'Minum pereda nyeri',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 5,
                'prevention' => 'Konsumsi makanan tinggi serat',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 5,
                'prevention' => 'Olahraga ringan secara rutin',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 5,
                'prevention' => 'Perbanyak minum air putih',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 5,
                'prevention' => 'Konsumsi probiotik',
                'created_at' => Carbon::now()
            ],
            [
                'disease_id' => 5,
                'prevention' => 'Konsultasi dengan dokter',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
