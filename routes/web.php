<?php

use Illuminate\Support\Facades\Route;
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
use App\Models\Article;

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

Route::get('/', function () {
    $articles = Article::orderByDesc('published_at')->take(6)->get();
    return view('welcome', compact('articles'));
});

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
