<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RhkModel;

class RhkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rhk')->insert([
            'id'=> '1',
            'nama_rhk' => 'Subhanallah'
        ]);
        DB::table('rhk')->insert([
            'id'=> '2',
            'nama_rhk' => 'Alhamdulillah'
        ]);
        DB::table('rhk')->insert([
            'id'=> '3',
            'nama_rhk' => 'Allahu Akbar'
        ]);
    }
}
