<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Seeders\DatabaseSeeder;

class RhkModel extends Model
{
    use HasFactory;
    protected $table = 'rhk';
    protected $fillable = [
        'nama_rhk'
    ];

    public function rhk()
    {
        return $this->belongsTo(RhkModel::class, 'rhk_id');
    }
}
