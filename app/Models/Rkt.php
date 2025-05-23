<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rkt extends Model
{
    use HasFactory;
    protected $table = 'rkt';
      // Menambahkan kolom yang dapat diisi melalui mass assignment
    protected $fillable = [
        'identifikasi',
        'akar_masalah',
        'kegiatan_benahi',
        'penjelasan_implementasi',
        'biaya_diperlukan',
    ];
}