<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Schema;
use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Materi::truncate();
        Schema::enableForeignKeyConstraints();
        $kursus = Kursus::all();
        foreach ($kursus as $item) {
            Materi::create([
                'kursus_id' => $item->id,
                'judul_materi' => 'Enaknya Bisa Coding',
                'materi' => 'Pemrograman dasar adalah ilmu yang mempelajari tentang pemrograman komputer menggunakan bahasa pemrograman populer seperti Java, pascal,PHP, Python atau C++. Oiya, materi Pemrograman dasar kelas 10 semester 1 dan 2 ini peruntukan penggunaannya oleh para siswa di kompetensi keahlian TKJ, RPL dan Multimedia yang berfokuskan ke materi dasar-dasar Algoritma pemrograman, flowchart, dan logika pemrograman.
                Bahasa pemrograman yang akan dipakai sebagai pengantar pemrograman dasar adalah Python dan PHP. Bahasa pemrograman ini dipilih karena populer dan mudah dipelajari.
                Pada postingan kali ini akan saya sampaikan garis besar materi Pemrograman dasar kelas 10 semester 1 dan 2 kurikulum 2013 revisi 2017 kompetensi keahlian TKJ, RPL dan Multimedia
                Materi Pemrograman Dasar kelas 10 ini memiliki 14 Kompetensi Dasar atau modul pengetahuan dan ketrampilan yang dapat anda pelajari melalui berbagai media.
                Pemrograman Dasar ini tujuan kompetensinya buat apa? Skill keahliannya bisa buat kerja gak? Manfaat belajar PD apa aja?
                Modul Pemrograman Dasar banyak membahas tentang algoritma pemrograman, logika pemrograman, flowchart, bahasa pemrograman PHP dan Python dan melakukan koding (memprogram) komputer.'
            ]);

            Materi::create([
                'kursus_id' => $item->id,
                'judul_materi' => 'pemasaran digital',
                'materi' => 'Digital marketing adalah kegiatan pemasaran termasuk branding yang menggunakan berbagai media. 
                Sebagai contoh yaitu blog, website, e-mail, adwords, dan berbagai macam jaringan media sosial. Pengertian digital marketing adalah suatu proses perencanaan dan pelaksanaan dari konsep, ide, harga, promosi dan distribusi.'
            ]);
            Materi::create([
                'kursus_id' => $item->id,
                'judul_materi' => 'keuangan pribadi',
                'materi' => 'Cara mengatur keuangan adalah salah satu solusi agar uang yang kamu miliki bisa bertahan sampai akhir bulan. Biasanya nih, 
                anak mudah kalau memegang uang banyak pasti inginnya langsung dihabiskan.
                Eits, sebaiknya tidak begitu ya. Dengan mengetahui cara mengelola keuangan, kamu juga bisa menjaga kondisi keuangan tetap stabil, lho. 
                Yuk,langsung disimak saja penjelasan mengenai strategi mengatur keuangan
                pribadi dengan gaji kecil atau pas-pasan agar bisa bertahan sampai akhir bulan.'
            ]);
            Materi::create([
                'kursus_id' => $item->id,
                'judul_materi' => 'php dasar',
                'materi' => 'Dalam pengembangan website, PHP adalah salah satu bahasa pemrograman yang wajib dipelajari. Alasannya, bahasa 
                pemrograman ini mampu untuk membuat website menjadi dinamis.
                Nah, dalam artikel ini, Anda akan belajar tentang PHP secara lebih dalam. Kami akan membahas mengenai syntax dasar PHP beserta 
                contoh-contohnya. Selain itu, kami juga akan membahas tentang hubungan PHP dengan MySQL.
                Pasti sudah semakin penasaran kan dengan pembahasannya? Sebelum itu, mari pahami dulu pengertian dan fungsi PHP. '
            ]);
            Materi::create([
                'kursus_id' => $item->id,
                'judul_materi' => 'laravel dasar',
                'materi' => 'Pengembangan website akan terasa lebih mudah jika menggunakan tool yang tepat. Contohnya, framework PHP yang akan digunakan.
                Pengertian framework yang baik adalah framework yang sesuai dengan kebutuhan aplikasi web yang akan Anda bangun. Tidak hanya itu, framework juga harus 
                bisa menyederhanakan proses pembuatan dan menghasilkan performa yang aplikasi web yang lebih maksimal.
                Nah! Salah satu framework yang sangat populer saat ini adalah Laravel. Framework ini 
                terkenal kesederhanaannya dan menghasilkan aplikasi web yang powerful.
                Artikel ini akan membahas soal apa itu Laravel, manfaat Laravel, fitur-fitur Laravel, hingga tips Laravel untuk pemula.'
            ]);
            Materi::create([
                'kursus_id' => $item->id,
                'judul_materi' => 'manfaat bisa coding',
                'materi' => 'Salah satu manfaat utama belajar coding adalah untuk memulai 
                karir di bidang IT. Peluang karir ini sangat menjajikan, sebab perkembangan teknologi membuat banyak 
                perusahaan makin membutuhkan orang-orang yang memiliki kemampuan coding untuk membuat website maupun aplikasi.'
            ]);
        }
    }
}
