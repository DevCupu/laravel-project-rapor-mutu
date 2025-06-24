@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto px-6 py-10 bg-white border border-gray-200 rounded-3xl shadow-xl">
    <h2 class="text-3xl font-bold text-[#7083C3] mb-8 tracking-tight">✏️ Edit Rekomendasi PBD</h2>

    <form action="{{ route('rekomendasi-keseluruhan.update', $data->id) }}" method="POST" class="space-y-8">
        @csrf
        @method('PUT')

        @foreach (['kategori', 'masalah'] as $field)
        <div class="form-group">
            <input
                type="text"
                name="{{ $field }}"
                id="{{ $field }}"
                required
                placeholder=" "
                value="{{ old($field, $data->$field) }}"
                class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#7083C3] focus:border-[#7083C3] transition @error($field) border-red-500 @enderror">
            <label for="{{ $field }}" class="form-label">
                {{ ucwords(str_replace('_', ' ', $field)) }}
            </label>
            @error($field)
            <p class="text-red-600 text-sm mt-1">⚠ {{ $message }}</p>
            @enderror
        </div>
        @endforeach

        @foreach (['kegiatan_benahi' => 'Kegiatan Pembenahan', 'kegiatan_arkas' => 'Kegiatan ARKAS'] as $name => $label)
        <div class="form-group">
            <textarea
                name="{{ $name }}"
                id="{{ $name }}"
                rows="4"
                required
                placeholder=" "
                class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#7083C3] focus:border-[#7083C3] transition @error($name) border-red-500 @enderror">{{ old($name, $data->$name) }}</textarea>
            <label for="{{ $name }}" class="form-label">{{ $label }}</label>
            @error($name)
            <p class="text-red-600 text-sm mt-1">⚠ {{ $message }}</p>
            @enderror
        </div>
        @endforeach

        <div class="flex justify-between items-center pt-4">
            <a href="{{ route('rekomendasi-keseluruhan.index') }}"
                class="inline-flex items-center px-4 py-2 text-sm font-bold text-gray-600 bg-transparent border border-gray-300 rounded-xl hover:bg-gray-100 transition">
                ← Batal
            </a>
            <button type="submit"
                class="inline-flex items-center px-6 py-2 bg-[#7083C3] hover:bg-[#5c6bb2] text-white text-sm font-semibold rounded-xl shadow transition">
                Perbarui
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
        resize: none;
    }

    .form-label {
        position: absolute;
        top: 0.75rem;
        left: 1rem;
        font-size: 0.85rem;
        color: #6b7280;
        pointer-events: none;
        transition: 0.2s ease all;
    }

    .form-input:focus+.form-label,
    .form-input:not(:placeholder-shown)+.form-label {
        top: 0.3rem;
        font-size: 0.75rem;
        color: #7083C3;
    }
</style>
@endsection