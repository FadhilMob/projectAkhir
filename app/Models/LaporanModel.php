<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanModel extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    protected $fillable = [
        'judul',
        'latar_belakang',
        'dasar_hukum',
        'dasar_pelaksanaan',
        'waktu_pelaksanaan',
        'hari',
        'pukul1',
        'pukul2',
        'tempat',
        'peserta',
        'tujuan',
        'identifikasi_masalah',
        'dokumentasi',
        'role'
    ];
}
