<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaporPendidikan extends Model
{
    use HasFactory;

    protected $fillable = [
        'indikator',
        'kategori',
        'nilai',
        'deskripsi',
        'tahun',
    ];
}
