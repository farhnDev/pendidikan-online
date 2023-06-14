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
        Schema::table('kursus', function (Blueprint $table) {
            $table->unsignedBigInteger('pengajar_id')->nullable()->after('descripsion');
            $table->foreign('pengajar_id')->references('id')->on('pengajar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kursus', function (Blueprint $table) {
            $table->dropForeign('pengajar_id');
            $table->dropColumn('pengajar_id');
        });
    }
};
