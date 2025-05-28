<?php

namespace App\Http\Controllers;

use App\Models\RekomendasiPrioritas;
use Illuminate\Http\Request;

class RekomendasiPrioritasController extends Controller
{
    public function index()
    {
        $data = RekomendasiPrioritas::all();
        return view('rekomendasi-prioritas.index', compact('data'));
    }

    public function create()
    {
        return view('rekomendasi-prioritas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
            'masalah' => 'required',
            'kegiatan_benahi' => 'required',
            'kegiatan_arkas' => 'required',
        ]);

        RekomendasiPrioritas::create($request->all());
        return redirect()->route('rekomendasi-prioritas.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = RekomendasiPrioritas::findOrFail($id);
        return view('rekomendasi-prioritas.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required',
            'masalah' => 'required',
            'kegiatan_benahi' => 'required',
            'kegiatan_arkas' => 'required',
        ]);

        $data = RekomendasiPrioritas::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('rekomendasi-prioritas.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = RekomendasiPrioritas::findOrFail($id);
        $data->delete();

        return redirect()->route('rekomendasi-prioritas.index')->with('success', 'Data berhasil dihapus.');
    }

    public function cardView()
    {
        $data = RekomendasiPrioritas::all();
        return view('rekomendasi-prioritas.card', compact('data'));
    }
}

