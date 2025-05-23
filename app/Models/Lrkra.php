<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
