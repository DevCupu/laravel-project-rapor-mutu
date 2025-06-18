<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Http\Controllers\{
    ProfileController,
    ArticleController,
    RktController,
    LrkraController,
    RaporPendidikanController,
    PanduanController,
    RekomendasiPbdController,
    RekomendasiPrioritasController
};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class)->name('home');

// Before refactor 
// Route::get('/', function () {
//     $articles = Article::orderByDesc('published_at')->take(6)->get();

//     $data = DB::table('lrkra')
//         ->select('kegiatan_benahi', DB::raw('SUM(total) as total_biaya'))
//         ->groupBy('kegiatan_benahi')
//         ->get();

//     $monthlyData = DB::table('lrkra')
//         ->selectRaw('MONTH(created_at) as bulan, COUNT(*) as jumlah_kegiatan')
//         ->groupBy('bulan')
//         ->orderBy('bulan')
//         ->get();

//     $compareData = DB::table('lrkra')
//         ->select(
//             'kegiatan_benahi',
//             DB::raw('SUM(jumlah) as total_jumlah'),
//             DB::raw('AVG(harga_satuan) as rata_harga_satuan')
//         )
//         ->groupBy('kegiatan_benahi')
//         ->get();

//     $raporChart = DB::table('rapor_pendidikans')
//         ->select('kategori', 'nilai', DB::raw('COUNT(*) as jumlah'))
//         ->groupBy('kategori', 'nilai')
//         ->get();

//     $raporPerTahun = DB::table('rapor_pendidikans')
//         ->select('tahun', DB::raw('COUNT(*) as total'))
//         ->groupBy('tahun')
//         ->orderBy('tahun')
//         ->get();

//     $rktPerTahun = DB::table('rkt')
//         ->select('tahun', DB::raw('COUNT(*) as jumlah'))
//         ->groupBy('tahun')
//         ->orderBy('tahun', 'desc')
//         ->take(2)
//         ->get();

//     if ($rktPerTahun->count() == 2) {
//         $tahunTerbaru = $rktPerTahun[0];
//         $tahunSebelumnya = $rktPerTahun[1];
//         $selisih = $tahunTerbaru->jumlah - $tahunSebelumnya->jumlah;
//         $persen = round(($selisih / $tahunSebelumnya->jumlah) * 100, 1);

//         $status = $selisih > 0 ? 'meningkat' : 'menurun';
//         $insightRKT = "Jumlah RKT <strong>{$status}</strong> sebesar <strong>{$persen}%</strong> dari tahun {$tahunSebelumnya->tahun} ke {$tahunTerbaru->tahun}.";
//     } else {
//         $insightRKT = "Belum cukup data untuk membandingkan RKT antar tahun.";
//     }

//     $nilaiTerbanyak = DB::table('rapor_pendidikans')
//         ->select('nilai', DB::raw('COUNT(*) as total'))
//         ->groupBy('nilai')
//         ->orderByDesc('total')
//         ->first();

//     $kategoriTerbanyak = DB::table('rapor_pendidikans')
//         ->select('kategori', DB::raw('COUNT(*) as total'))
//         ->groupBy('kategori')
//         ->orderByDesc('total')
//         ->first();

//     $insightRapor = $nilaiTerbanyak && $kategoriTerbanyak
//         ? "Sebagian besar indikator memiliki nilai <strong>{$nilaiTerbanyak->nilai}</strong>, dengan kategori terbanyak adalah <strong>{$kategoriTerbanyak->kategori}</strong>."
//         : "Belum ada data rapor pendidikan yang tersedia.";

//     return view('welcome', compact('articles', 'data', 'monthlyData', 'compareData', 'raporChart', 'raporPerTahun', 'rktPerTahun', 'insightRKT', 'insightRapor'));
// });



// Route publik untuk menampilkan detail artikel (di luar dashboard)
Route::get('/artikel/{article}', [ArticleController::class, 'show'])->name('articles.show');

// Group all dashboard routes with 'auth' middleware and 'dashboard' prefix
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    // Article CRUD (kecuali show)
    Route::resource('articles', ArticleController::class)->except(['show']);
    Route::resource('rkt', RktController::class);
    Route::resource('lrkra', LrkraController::class);
    Route::resource('rapor-pendidikan', RaporPendidikanController::class);
    Route::resource('panduan-pbd', PanduanController::class);
    Route::resource('rekomendasi-keseluruhan', RekomendasiPbdController::class);
    Route::resource('rekomendasi-prioritas', RekomendasiPrioritasController::class);
    Route::get('rekomendasi-prioritas/card', [RekomendasiPrioritasController::class, 'cardView'])->name('rekomendasi-prioritas.card');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
