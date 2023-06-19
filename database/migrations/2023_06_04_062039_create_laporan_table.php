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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->longText('judul');
            $table->longText('latar_belakang');
            $table->longText('dasar_hukum');
            // $table->longText('uu'); DROPDOWN, RELASI BERARTI
            $table->longText('dasar_pelaksanaan');
            $table->longText('waktu_pelaksanaan');
            $table->date('hari');
            $table->longText('pukul1');
            $table->longText('pukul2');
            $table->longText('tempat');
            $table->longText('peserta');
            $table->longText('tujuan');
            $table->longText('identifikasi_masalah');
            $table->longText('dokumentasi');
            // $table->string('image');
            // $table->longText('ttd');  ADA 3 TTD, BUAT DROPDOWN RELASI
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
