<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function scopePerKategoriNilai($q)
    {
        return $q->select('kategori', 'nilai', DB::raw('COUNT(*) as jumlah'))
            ->groupBy('kategori', 'nilai');
    }

    public function scopePerTahun($q)
    {
        return $q->select('tahun', DB::raw('COUNT(*) as total'))
            ->groupBy('tahun')->orderBy('tahun');
    }
}
