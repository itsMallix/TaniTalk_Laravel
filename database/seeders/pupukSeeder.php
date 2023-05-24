<?php

namespace Database\Seeders;

use App\Models\Formulasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pupukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pupukData= Formulasi::create([
            'nama_pupuk'=>'NPK COMPACTION DGW',
            'bentuk'=>'Granul',
            'warna'=>'Biru',
            'deskripsi'=>'Pupuk NPK Majemuk yang diproduksi menggunakan teknologi Compaction Compound dengan kandungan 15+15+15+TE untuk pertumbuhan dan hasil tanaman lebih berkualitas',
            'manfaat'=>'Pupuk berteknologi Compaction Compound Unsur hara sesuai dengan waktu kebutuhan tanaman Konsistensi kandungan unsur hara makro & mikro disetiap butiran pupuk Mudah larut (mudah untuk aplikasi kocor pada tanaman) & mudah ditaburkan',
            'kemasan'=>'Karung 25 Kg dan 50 Kg',
            'penggunaan'=>'Ditugal Ditaburkan dengan dosis 250-300 Kg/Ha Dikocorkan dengan dosis 2-4 Kg/200 L air Dibenamkan dalam alur mengelilingi batang tanaman'
        ]);
    }
}
