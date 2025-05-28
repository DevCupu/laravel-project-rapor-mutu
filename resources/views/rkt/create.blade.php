@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Tambah Lembar Rencana Kerja Tahunan') }}
    </h2>
@endsection

@section('content')
<div class="py-12">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 text-lg">
        <form action="{{ route('rkt.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="bg-white dark:bg-gray-800 p-8 shadow-md rounded-lg">
                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="identifikasi" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Identifikasi</label>
                        <input type="text" name="identifikasi" id="identifikasi" class="form-input w-full" required>
                    </div>
                    <div>
                        <label for="akar_masalah" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Akar Masalah</label>
                        <input type="text" name="akar_masalah" id="akar_masalah" class="form-input w-full" required>
                    </div>
                    <div>
                        <label for="kegiatan_benahi" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Kegiatan Benahi</label>
                        <input type="text" name="kegiatan_benahi" id="kegiatan_benahi" class="form-input w-full" required>
                    </div>
                    <div>
                        <label for="penjelasan_implementasi" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Penjelasan Implementasi</label>
                        <textarea name="penjelasan_implementasi" id="penjelasan_implementasi" rows="4" class="form-textarea w-full" required></textarea>
                    </div>
                    <div>
                        <label for="biaya_diperlukan" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Biaya Diperlukan</label>
                        <select name="biaya_diperlukan" id="biaya_diperlukan" class="form-select w-full" required>
                            <option value="1">Ya</option>
                            <option value="0">Tidak</option>
                        </select>
                    </div>
                    <div>
                        <label for="tahun" class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-200">Data Tahun</label>
                        <input type="text" name="tahun" id="tahun" class="form-input w-full" required>
                    </div>
                </div>
                <div class="mt-8 flex justify-end">
                    <button type="submit" class="inline-flex items-center px-6 py-3 bg-red-600 hover:bg-red-700 text-white text-base font-medium rounded-lg shadow-sm transition focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800">
                        Simpan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
