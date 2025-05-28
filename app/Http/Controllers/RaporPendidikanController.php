<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RaporPendidikan;

class RaporPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = RaporPendidikan::query();

        // Jika user memilih tahun, filter berdasarkan tahun
        if ($request->has('tahun') && $request->tahun != '') {
            $query->where('tahun', $request->tahun);
        }

        // Ambil semua data (baik yang sudah difilter atau tidak)
        $data = $query->get();

        return view('rapor-pendidikan.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rapor-pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'indikator' => 'required|string',
            'kategori' => 'required|string',
            'nilai' => 'required|string',
            'tahun' => 'required|digits:4|integer',
        ]);

        RaporPendidikan::create($request->all());
        return redirect()->route('rapor-pendidikan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Ambil data rapor pendidikan berdasarkan id
        $rapor = RaporPendidikan::findOrFail($id);

        return view('rapor-pendidikan.edit', compact('rapor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'indikator' => 'required|string',
            'kategori' => 'required|string',
            'nilai' => 'required|string',
            'tahun' => 'required|digits:4|integer',
        ]);

        $rapor = RaporPendidikan::findOrFail($id);
        $rapor->update($request->all());
        return redirect()->route('rapor-pendidikan.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rapor = RaporPendidikan::findOrFail($id);
        $rapor->delete();
        return redirect()->route('rapor-pendidikan.index')->with('success', 'Data berhasil dihapus');
    }
}
