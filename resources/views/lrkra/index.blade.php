@extends('layouts.app')

@section('header')
<h1 class="text-3xl font-bold text-white">📋 Data LRKRA</h1>
@endsection

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">
    <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-6">
        <x-back-to-dashboard>Kembali</x-back-to-dashboard>
        <h2 class="text-xl font-semibold text-gray-800">📋 Daftar Kegiatan LRKRA</h2>
        <a href="{{ route('lrkra.create') }}"
            class="inline-flex items-center gap-2 px-5 py-2 bg-[#7083C3] hover:bg-[#5c6bb2] text-white text-sm font-semibold rounded-xl shadow-md transition-all duration-200">
            ➕ Tambah Data
        </a>
    </div>

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

    <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-xl rounded-2xl border border-gray-200 dark:border-gray-700">
        <table class="min-w-full divide-y divide-gray-200 text-sm text-left">
            <thead class="bg-gray-300 text-gray-600 uppercase text-xs sticky top-0 z-10">
                <tr>
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Kegiatan Benahi</th>
                    <th class="px-6 py-3">Implementasi</th>
                    <th class="px-6 py-3">Kegiatan ARKAS</th>
                    <th class="px-6 py-3">Uraian ARKAS</th>
                    <th class="px-6 py-3">Jumlah</th>
                    <th class="px-6 py-3">Harga Satuan</th>
                    <th class="px-6 py-3">Total</th>
                    <th class="px-6 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-gray-700">
                @forelse ($lrkra as $item)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4">{{ $item->kegiatan_benahi }}</td>
                    <td class="px-6 py-4">{{ $item->implementasi_kegiatan }}</td>
                    <td class="px-6 py-4">{{ $item->kegiatan_arkas }}</td>
                    <td class="px-6 py-4">{{ $item->uraian_kegiatan_arkas }}</td>
                    <td class="px-6 py-4">{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                    <td class="px-6 py-4">Rp{{ number_format($item->harga_satuan, 0, ',', '.') }}</td>
                    <td class="px-6 py-4 font-semibold text-green-600">Rp{{ number_format($item->total, 0, ',', '.') }}</td>
                    <td class="px-6 py-4 text-center flex justify-center gap-3">
                        <a href="{{ route('lrkra.edit', $item->id) }}"
                            class="inline-flex items-center px-3 py-1.5 bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-medium rounded-lg transition-shadow shadow-sm">
                            ✏️ Edit
                        </a>
                        <form action="{{ route('lrkra.destroy', $item->id) }}" method="POST"
                            class="inline"
                            onsubmit="return confirm('Yakin ingin menghapus data ini?');">
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
                    <td colspan="9" class="text-center py-6 text-gray-500">Belum ada data LRKRA yang tersedia.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection