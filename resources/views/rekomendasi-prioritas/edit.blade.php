@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-10">
    <h1 class="text-2xl font-bold mb-6">Edit Rekomendasi</h1>

    <form action="{{ route('rekomendasi-prioritas.update', $data->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="kategori" class="block font-semibold">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="w-full border rounded px-3 py-2" value="{{ $data->kategori }}" required>
        </div>

        <div>
            <label for="masalah" class="block font-semibold">Masalah</label>
            <textarea name="masalah" id="masalah" rows="2" class="w-full border rounded px-3 py-2" required>{{ $data->masalah }}</textarea>
        </div>

        <div>
            <label for="kegiatan_benahi" class="block font-semibold">Kegiatan Benahi</label>
            <textarea name="kegiatan_benahi" id="kegiatan_benahi" rows="4" class="w-full border rounded px-3 py-2" required>{{ $data->kegiatan_benahi }}</textarea>
        </div>

        <div>
            <label for="kegiatan_arkas" class="block font-semibold">Kegiatan ARKAS</label>
            <textarea name="kegiatan_arkas" id="kegiatan_arkas" rows="4" class="w-full border rounded px-3 py-2" required>{{ $data->kegiatan_arkas }}</textarea>
        </div>

        <div class="flex justify-end space-x-2">
            <a href="{{ route('rekomendasi-prioritas.index') }}" class="text-gray-600 hover:underline">Batal</a>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update</button>
        </div>
    </form>
</div>
@endsection
