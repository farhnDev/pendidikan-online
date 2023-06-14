<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('materi_kursus', function (Blueprint $table) {
            $table->string('isi_materi', 1000)->change();
            $table->text('materi')->nullable()->after('judul_materi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materi_kursus', function (Blueprint $table) {
            $table->text('materi')->nullable(false)->change();
            $table->string('isi_materi', 1000)->change();
        });
    }
};
