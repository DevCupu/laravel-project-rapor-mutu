<?php

namespace App\Services;

use App\Models\RaporPendidikan;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class InsightService
{
    public static function rkt(Collection $rktPerTahun): string
    {
        if ($rktPerTahun->count() !== 2) {
            return 'Belum cukup data untuk membandingkan RKT antar tahun.';
        }

        [$latest, $prev] = $rktPerTahun->values();
        $selisih = $latest->jumlah - $prev->jumlah;
        $persen  = $prev->jumlah === 0 ? 0 : round($selisih / $prev->jumlah * 100, 1);
        $status  = $selisih > 0 ? 'meningkat' : 'menurun';

        return "Jumlah RKT <strong>{$status}</strong> sebesar <strong>{$persen}%</strong> dari tahun {$prev->tahun} ke {$latest->tahun}.";
    }

    public static function rapor(): string
    {
        $nilaiTerbanyak = RaporPendidikan::select('nilai', DB::raw('COUNT(*) total'))
            ->groupBy('nilai')->orderByDesc('total')->first();

        $kategoriTerbanyak = RaporPendidikan::select('kategori', DB::raw('COUNT(*) total'))
            ->groupBy('kategori')->orderByDesc('total')->first();

        if (!$nilaiTerbanyak || !$kategoriTerbanyak) {
            return 'Belum ada data rapor pendidikan yang tersedia.';
        }

        return "Sebagian besar indikator memiliki nilai <strong>{$nilaiTerbanyak->nilai}</strong>, dengan kategori terbanyak adalah <strong>{$kategoriTerbanyak->kategori}</strong>.";
    }

    public static function masalahPBD(): string
    {
        $masalahTerbanyak = DB::table('rekomendasi_pbd')
            ->select('masalah', DB::raw('COUNT(*) as total'))
            ->groupBy('masalah')
            ->orderByDesc('total')
            ->first();

        return $masalahTerbanyak
            ? "Masalah paling sering ditemukan adalah <strong>{$masalahTerbanyak->masalah}</strong>."
            : "Belum ada data masalah dari rekomendasi PBD.";
    }

    public static function biayaTertinggiLrkra(): string
    {
        $kegiatanTermahal = DB::table('lrkra')
            ->select('kegiatan_benahi', DB::raw('SUM(total) as total_biaya'))
            ->groupBy('kegiatan_benahi')
            ->orderByDesc('total_biaya')
            ->first();

        return $kegiatanTermahal
            ? "Kegiatan <strong>{$kegiatanTermahal->kegiatan_benahi}</strong> memiliki total biaya tertinggi sebesar <strong>Rp " . number_format($kegiatanTermahal->total_biaya, 0, ',', '.') . "</strong>."
            : "Belum ada data biaya kegiatan.";
    }
}
