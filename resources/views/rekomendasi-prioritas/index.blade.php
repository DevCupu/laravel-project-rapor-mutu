@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-10">
    <div class="flex justify-between items-center mb-8">
        <x-back-to-dashboard>Kembali</x-back-to-dashboard>
        <h1 class="text-3xl font-bold text-[#7083C3] tracking-tight">📋 Daftar Rekomendasi Prioritas</h1>
        <a href="{{ route('rekomendasi-prioritas.create') }}"
            class="bg-[#7083C3] text-white px-4 py-2 rounded-xl text-sm font-medium shadow hover:bg-[#253381] transition">
            + Tambah Rekomendasi
        </a>
    </div>

    <div class="mb-6">
        <a href="{{ route('rekomendasi-prioritas.card') }}"
            class="inline-block text-sm text-[#7083C3] hover:underline hover:text-[#1f2c75] transition">
            🔍 Lihat Tampilan Kartu
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


    <div class="overflow-x-auto bg-white border border-gray-200 shadow-xl rounded-xl">
        <table class="min-w-full table-auto text-sm text-gray-700">
            <thead>
                <tr class="bg-gray-300 text-gray-600 text-left">
                    <th class="px-4 py-3 font-semibold border-b">No</th>
                    <th class="px-4 py-3 font-semibold border-b">Kategori</th>
                    <th class="px-4 py-3 font-semibold border-b">Masalah</th>
                    <th class="px-4 py-3 font-semibold border-b">Kegiatan Benahi</th>
                    <th class="px-4 py-3 font-semibold border-b">Kegiatan ARKAS</th>
                    <th class="px-4 py-3 font-semibold border-b text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $item)
                <tr class="hover:bg-[#FAFBFC] transition">
                    <td class="px-4 py-3 border-b">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3 border-b font-black text-[#7083C3]">{{ $item->kategori }}</td>
                    <td class="px-4 py-3 border-b">{{ $item->masalah }}</td>
                    <td class="px-4 py-3 border-b">{{ $item->kegiatan_benahi }}</td>
                    <td class="px-4 py-3 border-b">{{ $item->kegiatan_arkas }}</td>
                    <td class="px-4 py-3 border-t flex gap-2 justify-center">
                        <a href="{{ route('rekomendasi-prioritas.edit', $item->id) }}"
                            class="inline-flex items-center px-3 py-1.5 bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-medium rounded-lg transition-shadow shadow-sm">
                            ✏️ Edit
                        </a>
                        <form action="{{ route('rekomendasi-prioritas.destroy', $item->id) }}" method="POST"
                            class="inline-block"
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
                    <td colspan="6" class="px-4 py-6 text-center text-gray-500">
                        🚫 Belum ada data rekomendasi.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection