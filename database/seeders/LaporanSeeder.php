<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LaporanModel;


class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporan')->insert([
            'id'=> '1',
            'judul' => 'Pengawasan Lingkungan Lamp',
            'latar_belakang' => 'JALANIN AJA',
            'dasar_hukum' => 'Didasari Oleh',
            'dasar_pelaksanaan' => 'ff',
            'waktu_pelaksanaan' => 'sf',
            'hari' => '2023-6-2',
            'pukul1' => '',
            'pukul2' => '',
            'tempat' => 'Jl Konoha',
            'peserta' => 'Naruto - Sasuke',
            'tujuan' => 'Gelar Hokage',
            'identifikasi_masalah' => 'Membuat Konoha ',
            'dokumentasi' => '',
        ]);
    }
}
