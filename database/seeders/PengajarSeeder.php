<?php

namespace Database\Seeders;

use App\Models\Pengajar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_pengajar' => 'Asep Abdillah',
                'bidang_keahlian' => 'Pemrograman and Analys',
                'pengalaman' => '9 Tahun Bekerja',
                'pendidikan' => 'S2 Informatika'
            ],

            [
                'nama_pengajar' => 'Andra Juansa',
                'bidang_keahlian' => 'Ilmu Marketing',
                'pengalaman' => '7 Tahun Bekerja',
                'pendidikan' => 'S1 Informatika'
            ],

            [
                'nama_pengajar' => 'Ridwan Muhammad',
                'bidang_keahlian' => 'Management Keuangan',
                'pengalaman' => '8 Tahun Praktek',
                'pendidikan' => 'S1 Informatika'
            ],

            [
                'nama_pengajar' => 'Sifaq adiluh',
                'bidang_keahlian' => 'Pemrograman and Studi tour',
                'pengalaman' => '6 Tahun Praktek',
                'pendidikan' => 'S1 Informatika'
            ],

            [
                'nama_pengajar' => 'Asep Sudirman',
                'bidang_keahlian' => 'Development beckend',
                'pengalaman' => '5 Tahun Bekerja',
                'pendidikan' => 'S2 Informatika'
            ],

            [
                'nama_pengajar' => 'Ocid Osyid',
                'bidang_keahlian' => 'Full Stack Development',
                'pengalaman' => '6 Tahun Bekerja',
                'pendidikan' => 'S1 Informatika'
            ],
        ];
        foreach ($data as $value) {
            Pengajar::insert([
                'nama_pengajar'     => $value['nama_pengajar'],
                'bidang_keahlian'   => $value['bidang_keahlian'],
                'pengalaman'        => $value['pengalaman'],
                'pendidikan'        => $value['pendidikan'],
            ]);
        }
    }
}
