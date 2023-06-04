<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\BidangModel;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bidang')->insert([
            'id'=> '1',
            'nama_bidang' => 'Penataaan dan Penaatan Lingkungan'
        ]);
        DB::table('bidang')->insert([
            'id'=> '2',
            'nama_bidang' => 'Pengendalian Pencemaran Pemeliharaan Lingkungan dan Pertamanan'
        ]);
        DB::table('bidang')->insert([
            'id'=> '3',
            'nama_bidang' => 'Pengendalian Sampah dan Bahan Berbahaya Beracun'
        ]);
    }
}
