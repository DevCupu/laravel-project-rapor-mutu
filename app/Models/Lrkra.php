<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lrkra extends Model
{
    use HasFactory;
    protected $table = 'lrkra';
    protected $fillable = [
        'kegiatan_benahi',
        'implementasi_kegiatan',
        'kegiatan_arkas',
        'uraian_kegiatan_arkas',
        'jumlah',
        'harga_satuan',
        'total',
    ];

    public function scopeTotalBiayaPerKegiatan($q)
    {
        return $q->select('kegiatan_benahi', DB::raw('SUM(total) as total_biaya'))
            ->groupBy('kegiatan_benahi');
    }

    public function scopePerBulan($q)
    {
        return $q->selectRaw('MONTH(created_at) as bulan, COUNT(*) as jumlah_kegiatan')
            ->groupBy('bulan')->orderBy('bulan');
    }

    public function scopePerKegiatanCompare($q)
    {
        return $q->select(
            'kegiatan_benahi',
            DB::raw('SUM(jumlah) as total_jumlah'),
            DB::raw('AVG(harga_satuan) as rata_harga_satuan')
        )->groupBy('kegiatan_benahi');
    }
}
