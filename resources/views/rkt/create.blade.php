<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Lembar Rencana Kerja Tahunan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 text-lg">
            <form action="{{ route('rkt.store') }}" method="POST">
                @csrf
                <div class="bg-white p-8 shadow-md rounded-md">
                    <table class="table-auto w-full">
                        <tbody>
                            <tr class="mb-4">
                                <td class="py-3 pr-6 font-medium text-gray-700 w-1/3">Identifikasi</td>
                                <td>
                                    <input type="text" name="identifikasi" id="identifikasi" class="w-full p-3 border border-gray-300 rounded-md" required>
                                </td>
                            </tr>

                            <tr class="mb-4">
                                <td class="py-3 pr-6 font-medium text-gray-700">Akar Masalah</td>
                                <td>
                                    <input type="text" name="akar_masalah" id="akar_masalah" class="w-full p-3 border border-gray-300 rounded-md" required>
                                </td>
                            </tr>

                            <tr class="mb-4">
                                <td class="py-3 pr-6 font-medium text-gray-700">Kegiatan Benahi</td>
                                <td>
                                    <input type="text" name="kegiatan_benahi" id="kegiatan_benahi" class="w-full p-3 border border-gray-300 rounded-md" required>
                                </td>
                            </tr>

                            <tr class="mb-4">
                                <td class="py-3 pr-6 font-medium text-gray-700">Penjelasan Implementasi</td>
                                <td>
                                    <textarea name="penjelasan_implementasi" id="penjelasan_implementasi" rows="4" class="w-full p-3 border border-gray-300 rounded-md" required></textarea>
                                </td>
                            </tr>

                            <tr class="mb-4">
                                <td class="py-3 pr-6 font-medium text-gray-700">Biaya Diperlukan</td>
                                <td>
                                    <select name="biaya_diperlukan" id="biaya_diperlukan" class="w-full p-3 border border-gray-300 rounded-md" required>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Tombol Submit -->
                    <div class="mt-6 text-right">
                        <button type="submit" class="bg-red-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
