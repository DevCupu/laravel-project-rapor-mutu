@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto px-4 py-6">
    <h2 class="text-2xl font-bold mb-4">Edit Rekomendasi</h2>

    <form action="{{ route('rekomendasi-keseluruhan.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block mb-1 font-medium">Kategori</label>
            <input type="text" name="kategori" value="{{ $data->kategori }}" required class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Masalah</label>
            <input type="text" name="masalah" value="{{ $data->masalah }}" required class="w-full border border-gray-300 rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Kegiatan Pembenahan</label>
            <textarea name="kegiatan_benahi" rows="3" required class="w-full border border-gray-300 rounded px-3 py-2">{{ $data->kegiatan_benahi }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-1 font-medium">Kegiatan ARKAS</label>
            <textarea name="kegiatan_arkas" rows="3" required class="w-full border border-gray-300 rounded px-3 py-2">{{ $data->kegiatan_arkas }}</textarea>
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Perbarui</button>
            <a href="{{ route('rekomendasi-keseluruhan.index') }}" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Batal</a>
        </div>
    </form>
</div>
@endsection
