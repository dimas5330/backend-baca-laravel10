<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Renungan;

class RenunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Renungan::insert([
            'judul' => 'Ini adalah judul',
            'date_renungan' => '2024-10-03',
            'bacaan' => 'Ini adalah bacaan',
            'ayat_bacaan' => 'Ini adalah ayat bacaan',
            'ayat_kunci' => 'Ini adalah ayat kunci',
            'isi_renungan' => 'Ini adalah isi renungan',
            'refleksi' => 'Ini adalah refleksi',
            'pertanyaan' => 'Ini adalah pertanyaan',
            'penerapan1' => 'Ini adalah penerapan 1',
            'penerapan2' => 'Ini adalah penerapan 2',
            'penerapan3' => 'Ini adalah penerapan 3',
            'prinsip' => 'Ini adalah prinsip',
            'doa' => 'Ini adalah doa',
        ]);
    }
}
