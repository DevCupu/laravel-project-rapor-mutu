@extends('layouts.app')

@section('header')
<div class="flex items-center justify-between">
    <h2 class="text-3xl font-extrabold text-gray-900 dark:text-white">
        {{ __('📋 Lembar Rencana Kerja Tahunan') }}
    </h2>
    <a href="{{ route('rkt.create') }}"
        class="inline-flex items-center gap-2 px-5 py-2.5 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold rounded-xl shadow-lg transition duration-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        Tambah RKT
    </a>
</div>
@endsection

@section('content')
<div class="py-5">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

        @if (session('success'))
        <div id="alert-success" class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-lg mb-6 shadow-sm">
            ✅ {{ session('success') }}
        </div>
        @endif

        <script>
            setTimeout(function() {
                const alert = document.getElementById('alert-success');
                if (alert) {
                    alert.style.transition = "opacity 0.5s ease";
                    alert.style.opacity = 0;
                    setTimeout(() => alert.remove(), 300); // remove from DOM after fade
                }
            }, 3000); // 5 detik
        </script>

        <x-back-to-dashboard>Kembali</x-back-to-dashboard>

        <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-6">
            <!-- Filter Tahun -->
            <form method="GET" action="{{ route('rkt.index') }}" class="mb-6 flex items-center gap-3">
                <label for="tahun" class="text-sm font-medium text-gray-700 dark:text-gray-300">Filter Tahun:</label>
                <select name="tahun" id="tahun" onchange="this.form.submit()"
                    class="px-3 py-2 rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-sm text-gray-700 dark:text-gray-200 shadow focus:ring-2 focus:ring-blue-500">
                    <option value="">-- Semua Tahun --</option>
                    @foreach ($tahunList as $tahunOption)
                    <option value="{{ $tahunOption }}" {{ request('tahun') == $tahunOption ? 'selected' : '' }}>
                        {{ $tahunOption }}
                    </option>
                    @endforeach
                </select>
            </form>

            <a href="{{ route('rkt.create') }}"
                class="inline-flex items-center gap-2 px-5 py-2 bg-[#7083C3] hover:bg-[#5c6bb2] text-white text-sm font-semibold rounded-xl shadow-md transition-all duration-200">
                ➕ Tambah Data
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-xl rounded-2xl border border-gray-200 dark:border-gray-700">
            <table class="min-w-full text-sm text-left text-gray-700 dark:text-gray-300">
                <thead
                    class="bg-gray-300 text-gray-600 uppercase text-xs sticky top-0 z-10">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Identifikasi</th>
                        <th class="px-4 py-3">Akar Masalah</th>
                        <th class="px-4 py-3">Kegiatan Benahi</th>
                        <th class="px-4 py-3">Penjelasan Implementasi</th>
                        <th class="px-4 py-3">Biaya</th>
                        <th class="px-4 py-3">Tahun</th>
                        <th class="px-4 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($rkt as $index => $item)
                    <tr class="border-b dark:border-gray-600 hover:bg-blue-50 dark:hover:bg-indigo-900 transition">
                        <td class="px-4 py-3 font-semibold">{{ $index + 1 }}</td>
                        <td class="px-4 py-3">{{ $item->identifikasi }}</td>
                        <td class="px-4 py-3">{{ $item->akar_masalah }}</td>
                        <td class="px-4 py-3">{{ $item->kegiatan_benahi }}</td>
                        <td class="px-4 py-3">{{ $item->penjelasan_implementasi }}</td>
                        <td class="px-4 py-3">
                            <span
                                class="inline-flex px-2 py-1 rounded-full text-xs font-medium {{ $item->biaya_diperlukan ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                {{ $item->biaya_diperlukan ? 'Ya' : 'Tidak' }}
                            </span>
                        </td>
                        <td class="px-4 py-3">{{ $item->tahun }}</td>
                        <td class="px-4 py-3 flex gap-2 justify-center">
                            <a href="{{ route('rkt.edit', $item->id) }}"
                                class="inline-flex items-center px-3 py-1.5 bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-medium rounded-lg transition-shadow shadow-sm">
                                ✏️ Edit</a>
                            <form action="{{ route('rkt.destroy', $item->id) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-flex items-center px-3 py-1.5 bg-red-500 hover:bg-red-600 text-white text-xs font-medium rounded-lg transition-shadow shadow-sm">
                                    🗑️ Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center px-4 py-6 text-gray-500 dark:text-gray-400">
                            Belum ada data RKT. Yuk, tambahkan sekarang!
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection