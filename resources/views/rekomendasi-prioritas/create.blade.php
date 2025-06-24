@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-6 py-10 bg-white shadow-md rounded-xl">
    <h1 class="text-3xl font-bold text-[#2F3E9E] mb-8">📝 Tambah Rekomendasi</h1>

    <form action="{{ route('rekomendasi-prioritas.store') }}" method="POST" class="space-y-6">
        @csrf

        <div>
            <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
            <input type="text" name="kategori" id="kategori" required
                class="w-full border border-gray-300 focus:ring-[#2F3E9E] focus:border-[#2F3E9E] rounded-lg px-4 py-2 shadow-sm transition">
        </div>

        <div>
            <label for="masalah" class="block text-sm font-medium text-gray-700 mb-1">Masalah</label>
            <textarea name="masalah" id="masalah" rows="2" required
                class="w-full border border-gray-300 focus:ring-[#2F3E9E] focus:border-[#2F3E9E] rounded-lg px-4 py-2 shadow-sm transition"></textarea>
        </div>

        <div>
            <label for="kegiatan_benahi" class="block text-sm font-medium text-gray-700 mb-1">Kegiatan Pembenahan</label>
            <textarea name="kegiatan_benahi" id="kegiatan_benahi" rows="3" required
                class="w-full border border-gray-300 focus:ring-[#2F3E9E] focus:border-[#2F3E9E] rounded-lg px-4 py-2 shadow-sm transition"></textarea>
        </div>

        <div>
            <label for="kegiatan_arkas" class="block text-sm font-medium text-gray-700 mb-1">Kegiatan ARKAS</label>
            <textarea name="kegiatan_arkas" id="kegiatan_arkas" rows="3" required
                class="w-full border border-gray-300 focus:ring-[#2F3E9E] focus:border-[#2F3E9E] rounded-lg px-4 py-2 shadow-sm transition"></textarea>
        </div>

        <div class="flex justify-between items-center pt-4">
            <a href="{{ route('rekomendasi-prioritas.index') }}"
                class="inline-flex items-center px-4 py-2 text-sm font-bold text-gray-600 bg-transparent border border-gray-300 rounded-xl hover:bg-gray-100 transition">
                ← Batal
            </a>
            <button type="submit"
                class="inline-flex items-center px-6 py-2 bg-[#7083C3] hover:bg-[#5c6bb2] text-white text-sm font-semibold rounded-xl shadow transition">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection