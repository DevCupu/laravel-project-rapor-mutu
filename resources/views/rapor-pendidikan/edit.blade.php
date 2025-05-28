@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Rapor Pendidikan</h1>

    <form action="{{ route('rapor-pendidikan.update', $rapor->id) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')
        <div>
            <label>Indikator</label>
            <input type="text" name="indikator" value="{{ $rapor->indikator }}" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label>Kategori</label>
            <input type="text" name="kategori" value="{{ $rapor->kategori }}" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label>Nilai</label>
            <input type="text" name="nilai" value="{{ $rapor->nilai }}" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="w-full border px-4 py-2">{{ $rapor->deskripsi }}</textarea>
        </div>
        <div>
            <label>Tahun</label>
            <input type="number" name="tahun" value="{{ $rapor->tahun }}" class="w-full border px-4 py-2" required>
        </div>
        <button type="submit" class="bg-yellow-600 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('rapor-pendidikan.index') }}" class="text-blue-600">Kembali</a>
    </form>
@endsection
