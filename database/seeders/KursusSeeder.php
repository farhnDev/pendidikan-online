<?php

namespace Database\Seeders;

use App\Models\Kursus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['judul_kursus' => 'Dasar Pemrograman', 'tema' => 'Belajar Dasar Pemrograman'],
            ['judul_kursus' => 'Pemasaran Digital', 'tema' => 'Mengulik tentang pemasaran'],
            ['judul_kursus' => 'Keuangan Pribadi', 'tema' => 'Mengatur keuangan dengan benar'],
            ['judul_kursus' => 'PHP Dasar', 'tema' => 'Yuk mengetahui bahasa pemrograman'],
            ['judul_kursus' => 'Laravel Dasar', 'tema' => 'Kepoin framework yuk'],
            ['judul_kursus' => 'CodingAn DASAR', 'tema' => 'NGOBAR Dasar yuk'],
        ];
        foreach ($data as $value) {
            Kursus::insert([
                'judul_kursus' => $value['judul_kursus'],
                'tema' => $value['tema'],
            ]);
        }
    }
}
