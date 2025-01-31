<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lukisan;

class LukisanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lukisanData = [
            ['nama_lukisan' => 'The Arrest of Prince Diponegoro', 'tahun_pembuatan' => 1855, 'deskripsi' => 'Menggambarkan penangkapan Pangeran Diponegoro oleh Belanda dengan ekspresi dramatis dan ketegangan tinggi.'],
            ['nama_lukisan' => 'Kuda Liar', 'tahun_pembuatan' => 1850, 'deskripsi' => 'Menampilkan sekumpulan kuda liar yang berlari dengan dinamis, menunjukkan gerakan alam yang kuat.'],
            ['nama_lukisan' => 'Penangkapan Pangeran Diponegoro', 'tahun_pembuatan' => 1855, 'deskripsi' => 'Momen penangkapan Pangeran Diponegoro, menggambarkan ketegangan peristiwa sejarah ini.'],
            ['nama_lukisan' => 'Harimau dan Penunggangnya', 'tahun_pembuatan' => 1860, 'deskripsi' => 'Seorang penunggang mengendalikan harimau dengan kekuatan dan keberanian, penuh ekspresi dinamis.'],
            ['nama_lukisan' => 'Pemuda Jawa', 'tahun_pembuatan' => 1850, 'deskripsi' => 'Potret pemuda Jawa dalam pakaian tradisional, menampilkan ekspresi tenang dan elegan.'],
            ['nama_lukisan' => 'Pertarungan Singa dan Harimau', 'tahun_pembuatan' => 1870, 'deskripsi' => 'Pertarungan dramatis antara singa dan harimau, menggambarkan kekuatan hewan-hewan tersebut.'],
            ['nama_lukisan' => 'Gajah Raksasa', 'tahun_pembuatan' => 1860, 'deskripsi' => 'Seekor gajah besar digambarkan menguasai lanskap alam, menunjukkan kekuatan dan dominasi.'],
            ['nama_lukisan' => 'Malaikat Turun ke Dunia', 'tahun_pembuatan' => 1850, 'deskripsi' => 'Gambaran malaikat yang turun ke bumi dengan sayap besar dan cahaya, menampilkan nuansa religius.'],
            ['nama_lukisan' => 'Pemandangan Alam', 'tahun_pembuatan' => 1850, 'deskripsi' => 'Lanskap alam yang tenang dengan gunung, pohon, dan sungai, menonjolkan kedamaian alam.'],
            ['nama_lukisan' => 'Pertempuran Laut', 'tahun_pembuatan' => 1870, 'deskripsi' => 'Perang laut dramatis dengan kapal-kapal perang di tengah ombak besar, menggambarkan aksi dinamis.']
        ];

        // Menyimpan data menggunakan insert
        Lukisan::insert($lukisanData); 
    }
}
