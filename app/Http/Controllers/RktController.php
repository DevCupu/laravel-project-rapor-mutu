<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rkt;
use App\Exports\RktExport;
use Maatwebsite\Excel\Facades\Excel;

class RktController extends Controller
{
    // Menampilkan daftar RKT
    public function index(Request $request)
    {
        // Query dasar
        $query = Rkt::query();

        // Filter berdasarkan tahun jika ada request
        if ($request->filled('tahun')) {
            $query->where('tahun', $request->tahun);
        }

        // Ambil data RKT setelah filter
        $rkt = $query->latest()->get();

        // Ambil daftar tahun unik dari database
        $tahunList = Rkt::select('tahun')->distinct()->orderBy('tahun', 'desc')->pluck('tahun');

        // Kirim data ke view
        return view('rkt.index', compact('rkt', 'tahunList'));
    }

    // Menampilkan form tambah RKT
    public function create()
    {
        return view('rkt.create');
    }

    // Menyimpan RKT baru
    public function store(Request $request)
    {
        $request->validate([
            'identifikasi' => 'required',
            'akar_masalah' => 'required',
            'kegiatan_benahi' => 'required',
            'penjelasan_implementasi' => 'required',
            'biaya_diperlukan' => 'required|boolean',
            'tahun' => 'required|string|digits:4',
        ]);

        Rkt::create($request->all());

        return redirect()->route('rkt.index')->with('success', 'Lembar Rencana Kerja Tahunan berhasil ditambahkan.');
    }

    // Menampilkan form edit RKT
    public function edit($id)
    {
        $rkt = Rkt::findOrFail($id);
        return view('rkt.edit', compact('rkt'));
    }

    // Memperbarui RKT
    public function update(Request $request, $id)
    {
        $request->validate([
            'identifikasi' => 'required',
            'akar_masalah' => 'required',
            'kegiatan_benahi' => 'required',
            'penjelasan_implementasi' => 'required',
            'biaya_diperlukan' => 'required|boolean',
        ]);

        $rkt = Rkt::findOrFail($id);
        $rkt->update($request->all());

        return redirect()->route('rkt.index')->with('success', 'Lembar Rencana Kerja Tahunan berhasil diperbarui.');
    }

    // Menghapus RKT
    public function destroy($id)
    {
        $rkt = Rkt::findOrFail($id);
        $rkt->delete();

        return redirect()->route('rkt.index')->with('success', 'Lembar Rencana Kerja Tahunan berhasil dihapus.');
    }
}
