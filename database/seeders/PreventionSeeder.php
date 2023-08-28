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
                'sub_criteria_id' => 2,
                'prevention' => 'Tekanan darah di atas 140/90 mmHg mengindikasikan hipertensi, yaitu kondisi di mana tekanan darah dalam arteri lebih tinggi dari tingkat normal. Ketika tekanan darah melebihi batas normal ini, perlu ada perhatian dan tindakan medis untuk mengatasi kondisi ini, terutama pada ibu hamil. Berikut adalah beberapa langkah yang dapat diambil ketika tensi darah ibu hamil di atas 140/90 mmHg: Pola Makan Sehat dengan mengkonsumsi makanan kaya serat, rendah garam, rendah lemak jenuh, dan kaya nutrisi seperti buah-buahan, sayuran, biji-bijian, ikan, dan kacang-kacangan, Kurangi Konsumsi Garam, dan Kurangi Konsumsi Kafein.',
                'created_at' => Carbon::now()
            ],
            [
                'sub_criteria_id' => 3,
                'prevention' => 'Rentang denyut nadi tergolong rendah. Untuk mengatasi hal tersebut menjaga gaya hidup sehat dapat membantu dalam mengelola bradikardia. Ini meliputi menghindari merokok, mengelola stres, berolahraga teratur dengan pengawasan dokter, dan menjaga berat badan sehat. Hindari konsumsi kafein dan alkohol yang berlebihan, karena ini dapat memengaruhi denyut nadi.',
                'created_at' => Carbon::now()
            ],
            [
                'sub_criteria_id' => 4,
                'prevention' => 'Rentang tekanan darah yang dianggap normal atau optimal. Rentang ini menunjukkan bahwa tekanan darah Anda berada dalam kisaran yang sehat, yang berpotensi memiliki manfaat positif bagi kesehatan jangka panjang. Lakukan Pemeriksaan Rutin dan Pertahankan Gaya Hidup Sehat.',
                'created_at' => Carbon::now()
            ],
            [
                'sub_criteria_id' => 5,
                'prevention' => 'Rentang denyut nadi tergolong tinggi. Pertama-tama, cobalah beristirahat dan menenangkan diri. Posisi duduk atau berbaring dan lakukan pernapasan dalam-dalam secara perlahan untuk membantu meredakan denyut nadi. Dehidrasi dapat memengaruhi denyut nadi. Pastikan Anda terhidrasi dengan cukup minum air putih. Hindari pemicu yang dapat meningkatkan denyut nadi, seperti konsumsi kafein, alkohol, atau makanan pedas.',
                'created_at' => Carbon::now()
            ],
            [
                'sub_criteria_id' => 6,
                'prevention' => 'Rentang hemoglobin (HB) di bawah 10-10,9 gram per desiliter (g/dL) dianggap sebagai tingkat hemoglobin yang rendah, kondisi medis yang dikenal sebagai anemia. Anemia terjadi ketika kadar hemoglobin dalam darah menurun di bawah batas normal, yang dapat mengganggu fungsi normal sel-sel darah merah dalam mengangkut oksigen ke seluruh tubuh.',
                'created_at' => Carbon::now()
            ],
            [
                'sub_criteria_id' => 7,
                'prevention' => 'Rentang hemoglobin (HB) di antara 7-9,9 gram per desiliter (g/dL) dianggap sebagai tingkat hemoglobin yang sedang, kondisi medis yang dikenal sebagai anemia tengah.',
                'created_at' => Carbon::now()
            ],
            [
                'sub_criteria_id' => 8,
                'prevention' => 'Rentang hemoglobin (HB) di bawah 7-9,9 gram per desiliter (g/dL) dianggap sebagai tingkat hemoglobin yang sangat rendah, yang menunjukkan anemia yang parah. Anemia yang parah dapat memiliki dampak serius pada kesehatan dan fungsi tubuh karena kurangnya oksigen yang diangkut oleh sel darah merah. Pengobatan untuk anemia yang parah akan bergantung pada penyebabnya. Ini bisa termasuk transfusi darah, terapi obat, penanganan penyakit yang mendasari, atau intervensi medis lainnya.',
                'created_at' => Carbon::now()
            ],
            [
                'sub_criteria_id' => 9,
                'prevention' => 'IMT (Indeks Massa Tubuh) adalah ukuran yang digunakan untuk mengevaluasi hubungan antara berat badan dan tinggi badan seseorang. IMT kurang dari 18,5 dianggap sebagai kategori "berat badan kurang" atau "berat badan rendah". Yang perlu dilakukan Perencanaan Nutrisi, Pemantauan Kesehatan',
                'created_at' => Carbon::now()
            ],
            [
                'sub_criteria_id' => 10,
                'prevention' => 'Rentang IMT 18.5 -24.9 dianggap normal atau optimal. Rentang ini menunjukkan bahwa berat badan Anda berada dalam kisaran yang sehat, yang berpotensi memiliki manfaat positif bagi kesehatan jangka panjang. Lakukan Pemeriksaan Rutin dan Pertahankan Gaya Hidup Sehat.',
                'created_at' => Carbon::now()
            ],
            [
                'sub_criteria_id' => 11,
                'prevention' => 'Rentang IMT 25 hingga 29,9 dianggap sebagai kategori "kelebihan berat badan" dalam konteks umum, termasuk untuk ibu hamil. Ini menunjukkan bahwa berat badan ibu hamil berada di atas batas normal sesuai dengan indeks massa tubuh (IMT)',
                'created_at' => Carbon::now()
            ],
            [
                'sub_criteria_id' => 12,
                'prevention' => 'Rentang IMT di atas 30 dianggap sebagai kategori "obesitas" dalam konteks umum, termasuk untuk ibu hamil. Obesitas pada ibu hamil dapat memiliki dampak serius pada kesehatan ibu dan janin. Berat badan ibu hamil yang obesitas dapat meningkatkan risiko komplikasi kesehatan selama kehamilan dan persalinan. Diet seimbang dan nutrisi yang tepat sangat penting bagi ibu hamil yang mengalami obesitas. Dokter atau ahli gizi dapat membantu merencanakan rencana makan yang sesuai. Ibu hamil dengan obesitas dianggap memiliki kehamilan risiko tinggi dan memerlukan pemantauan medis yang lebih cermat.',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
