@extends('layouts.app')

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Edit Lembar Rencana Kerja Tahunan') }}
</h2>
@endsection

@section('content')
<div class="py-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-base">
        <form action="{{ route('rkt.update', $rkt->id) }}" method="POST" class="space-y-10">
            @csrf
            @method('PUT')

            <div class="bg-white dark:bg-gray-800 p-10 rounded-3xl shadow-xl border border-gray-200 dark:border-gray-700">

                <h3 class="text-2xl font-bold text-[#7083C3] mb-8">✏️ Edit Data Rencana Kerja</h3>

                {{-- Floating Label Inputs --}}
                <div class="space-y-8">

                    @foreach ([
                    'identifikasi' => 'Identifikasi',
                    'akar_masalah' => 'Akar Masalah',
                    'kegiatan_benahi' => 'Kegiatan Benahi',
                    'tahun' => 'Data Tahun'
                    ] as $field => $label)
                    <div class="form-group">
                        <input type="text" name="{{ $field }}" id="{{ $field }}"
                            value="{{ old($field, $rkt->$field) }}"
                            required placeholder=" "
                            class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#7083C3] focus:border-[#7083C3] transition" />
                        <label for="{{ $field }}" class="form-label">{{ $label }}</label>
                    </div>
                    @endforeach

                    {{-- Textarea --}}
                    <div class="form-group">
                        <textarea name="penjelasan_implementasi" id="penjelasan_implementasi" rows="5" required placeholder=" "
                            class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#7083C3] focus:border-[#7083C3] transition resize-y">{{ old('penjelasan_implementasi', $rkt->penjelasan_implementasi) }}</textarea>
                        <label for="penjelasan_implementasi" class="form-label">Penjelasan Implementasi</label>
                    </div>

                    {{-- Select --}}
                    <div>
                        <label for="biaya_diperlukan" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">
                            Biaya Diperlukan
                        </label>
                        <select name="biaya_diperlukan" id="biaya_diperlukan"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#7083C3] focus:border-[#7083C3] transition dark:bg-gray-800 dark:text-white">
                            <option value="1" {{ $rkt->biaya_diperlukan ? 'selected' : '' }}>Ya</option>
                            <option value="0" {{ !$rkt->biaya_diperlukan ? 'selected' : '' }}>Tidak</option>
                        </select>
                    </div>
                </div>

                {{-- Button --}}
                <div class="flex justify-between items-center pt-4">
                    <a href="{{ route('rkt.index') }}"
                        class="inline-flex items-center px-4 py-2 text-sm font-bold text-gray-600 bg-transparent border border-gray-300 rounded-xl hover:bg-gray-100 transition">
                        ← Kembali
                    </a>
                    <button type="submit"
                        class="inline-flex items-center px-6 py-2 bg-[#7083C3] hover:bg-[#5c6bb2] text-white text-sm font-semibold rounded-xl shadow transition">
                        Perbarui
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Floating Label Styles --}}
<style>
    .form-group {
        position: relative;
    }

    .form-input {
        padding-top: 1.25rem;
        padding-bottom: 0.5rem;
        background-color: white;
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
        color: #7083C3;
    }
</style>
@endsection