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
            'nama' => 'KAMU NANYA',
            'alamat' => 'JALANIN AJA'
        ]);
    }
}
