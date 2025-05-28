@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Tambah Rapor Pendidikan</h1>

    <form action="{{ route('rapor-pendidikan.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label>Indikator</label>
            <input type="text" name="indikator" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label>Kategori</label>
            <input type="text" name="kategori" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label>Nilai</label>
            <input type="text" name="nilai" class="w-full border px-4 py-2" required>
        </div>
        <div>
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="w-full border px-4 py-2"></textarea>
        </div>
        <div>
            <label>Tahun</label>
            <input type="number" name="tahun" class="w-full border px-4 py-2" required>
        </div>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('rapor-pendidikan.index') }}" class="text-blue-600">Kembali</a>
    </form>
@endsection
