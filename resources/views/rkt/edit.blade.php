<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Lembar Rencana Kerja Tahunan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('rkt.update', $rkt->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="bg-white p-6 shadow-md rounded-md">
                    <div class="mb-4">
                        <label for="identifikasi" class="block text-sm font-medium text-gray-700">Identifikasi</label>
                        <input type="text" name="identifikasi" id="identifikasi" value="{{ $rkt->identifikasi }}" class="w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label for="akar_masalah" class="block text-sm font-medium text-gray-700">Akar Masalah</label>
                        <input type="text" name="akar_masalah" id="akar_masalah" value="{{ $rkt->akar_masalah }}" class="w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label for="kegiatan_benahi" class="block text-sm font-medium text-gray-700">Kegiatan Benahi</label>
                        <input type="text" name="kegiatan_benahi" id="kegiatan_benahi" value="{{ $rkt->kegiatan_benahi }}" class="w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                    </div>

                    <div class="mb-4">
                        <label for="penjelasan_implementasi" class="block text-sm font-medium text-gray-700">Penjelasan Implementasi</label>
                        <textarea name="penjelasan_implementasi" id="penjelasan_implementasi" rows="4" class="w-full p-2 mt-2 border border-gray-300 rounded-md" required>{{ $rkt->penjelasan_implementasi }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="biaya_diperlukan" class="block text-sm font-medium text-gray-700">Biaya Diperlukan</label>
                        <select name="biaya_diperlukan" id="biaya_diperlukan" class="w-full p-2 mt-2 border border-gray-300 rounded-md" required>
                            <option value="1" {{ $rkt->biaya_diperlukan ? 'selected' : '' }}>Ya</option>
                            <option value="0" {{ !$rkt->biaya_diperlukan ? 'selected' : '' }}>Tidak</option>
                        </select>
                    </div>

                    <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">Perbarui</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
