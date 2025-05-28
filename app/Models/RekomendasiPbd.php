<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekomendasiPbd extends Model
{
    use HasFactory;
    protected $table = 'rekomendasi_pbd';
    protected $fillable = ['kategori', 'masalah', 'kegiatan_benahi', 'kegiatan_arkas'];

}
