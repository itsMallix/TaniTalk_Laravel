<?php

namespace Database\Seeders;

use App\Models\Penyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class penyakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penyakitData = new Penyakit;
        $data = [
                'nama_penyakit'=>'Layu Semai',
                'jenis_penyakit'=>'Penyakit Kopi',
                'deskripsi'=>'Penyakit layu semai pada kopi disebabkan oleh jamur Fusarium sp. yang menyerang bibit kopi pada tahap awal pertumbuhannya. Jamur ini bisa menyebar melalui biji kopi yang sudah terinfeksi atau melalui media tanam yang terkontaminasi.'
        ];
        $penyakitData->create('tabel_penyakit', $data);
    }
}
