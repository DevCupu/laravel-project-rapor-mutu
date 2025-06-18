<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
    'tahun'
  ];

  public function scopePerTahunDesc($q)
  {
    return $q->select('tahun', DB::raw('COUNT(*) as jumlah'))
      ->groupBy('tahun')->orderByDesc('tahun');
  }
}
