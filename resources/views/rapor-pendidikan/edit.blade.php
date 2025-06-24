@extends('layout')

@section('content')
<div class="bg-white p-10 rounded-3xl shadow-xl border border-gray-200 max-w-3xl mx-auto">
    <h2 class="text-3xl font-bold mb-10 tracking-tight">✏️ Edit Rapor Pendidikan</h2>

    <form action="{{ route('rapor-pendidikan.update', $rapor->id) }}" method="POST" class="space-y-8">
        @csrf @method('PUT')

        {{-- Indikator --}}
        <div class="form-group">
            <input type="text" name="indikator" id="indikator" required placeholder=" "
                value="{{ old('indikator', $rapor->indikator) }}"
                class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition">
            <label for="indikator" class="form-label">Indikator</label>
        </div>

        {{-- Kategori --}}
        <div class="form-group">
            <input type="text" name="kategori" id="kategori" required placeholder=" "
                value="{{ old('kategori', $rapor->kategori) }}"
                class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition">
            <label for="kategori" class="form-label">Kategori</label>
        </div>

        {{-- Nilai --}}
        <div class="form-group">
            <input type="text" name="nilai" id="nilai" required placeholder=" "
                value="{{ old('nilai', $rapor->nilai) }}"
                class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition">
            <label for="nilai" class="form-label">Nilai</label>
        </div>

        {{-- Deskripsi --}}
        <div class="form-group">
            <textarea name="deskripsi" id="deskripsi" placeholder=" "
                class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition">{{ old('deskripsi', $rapor->deskripsi) }}</textarea>
            <label for="deskripsi" class="form-label">Deskripsi</label>
        </div>

        {{-- Tahun --}}
        <div class="form-group">
            <input type="number" name="tahun" id="tahun" required placeholder=" "
                value="{{ old('tahun', $rapor->tahun) }}"
                class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition">
            <label for="tahun" class="form-label">Tahun</label>
        </div>

        {{-- Buttons --}}
        <div class="flex justify-between items-center pt-4">
            <a href="{{ route('rapor-pendidikan.index') }}"
                class="inline-flex items-center px-4 py-2 text-sm font-bold text-gray-600 bg-transparent border border-gray-300 rounded-xl hover:bg-gray-100 transition">
                ← Kembali
            </a>
            <button type="submit"
                class="inline-flex items-center px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold rounded-xl shadow transition">
                Update
            </button>
        </div>
    </form>
</div>

{{-- Floating Label Styles --}}
<style>
    .form-group {
        position: relative;
    }

    .form-input {
        padding-top: 1.25rem;
        padding-bottom: 0.5rem;
    }

    .form-label {
        position: absolute;
        top: 0.75rem;
        left: 1rem;
        font-size: 1rem;
        color: #6b7280;
        pointer-events: none;
        transition: 0.2s ease all;
    }

    .form-input:focus+.form-label,
    .form-input:not(:placeholder-shown)+.form-label {
        top: 0.3rem;
        font-size: 0.75rem;
        color: #3b82f6;
        /* warna biru Tailwind (blue-400) */
    }
</style>
@endsection