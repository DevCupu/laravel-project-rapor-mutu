<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekomendasiPrioritas extends Model
{
    use HasFactory;
    protected $fillable = ['kategori', 'masalah', 'kegiatan_benahi', 'kegiatan_arkas'];
}
