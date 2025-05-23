<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lrkra;

class LrkraController extends Controller
{
    
    public function index()
    {
        $lrkra = Lrkra::all();
        return view('lrkra.index', compact('lrkra'));
        
    }

    public function create()
    {
        return view('lrkra.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kegiatan_benahi' => 'required|string',
            'implementasi_kegiatan' => 'required|string',
            'kegiatan_arkas' => 'required|string',
            'uraian_kegiatan_arkas' => 'required|string',
            'jumlah' => 'required|integer',
            'harga_satuan' => 'required|integer',
            'total' => 'required|integer',
        ]);

        Lrkra::create($validated);
        return redirect()->route('lrkra.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(Lrkra $lrkra)
    {
        return view('lrkra.edit', compact('lrkra'));
    }

    public function update(Request $request, Lrkra $lrkra)
    {
        $validated = $request->validate([
            'kegiatan_benahi' => 'required|string',
            'implementasi_kegiatan' => 'required|string',
            'kegiatan_arkas' => 'required|string',
            'uraian_kegiatan_arkas' => 'required|string',
            'jumlah' => 'required|integer',
            'harga_satuan' => 'required|integer',
            'total' => 'required|integer',
        ]);

        $lrkra->update($validated);
        return redirect()->route('lrkra.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Lrkra $lrkra)
    {
        $lrkra->delete();
        return redirect()->route('lrkra.index')->with('success', 'Data berhasil dihapus!');
    }
}
