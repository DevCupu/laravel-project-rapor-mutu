@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-6 py-10">
    <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-8">
        <x-back-to-dashboard>Kembali</x-back-to-dashboard>
        <h1 class="text-3xl font-bold text-[#4A5568]">📋 Daftar Rekomendasi Keseluruhan</h1>
        <a href="{{ route('rekomendasi-keseluruhan.create') }}"
            class="inline-flex items-center px-5 py-2.5 bg-[#7083C3] hover:bg-[#5e6fae] text-white text-sm font-semibold rounded-xl shadow transition">
            ➕ Tambah Rekomendasi
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

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($data as $item)
        <div class="bg-white border border-gray-200 shadow-md rounded-2xl p-6 transition hover:shadow-lg">
            <h2 class="text-xl font-semibold text-[#374151] mb-2">{{ $item->kategori }}</h2>
            <p class="text-sm text-gray-600 mb-1"><span class="font-medium text-gray-900">🔍 Masalah:</span> {{ $item->masalah }}</p>
            <p class="text-sm text-gray-600 mb-1"><span class="font-medium text-gray-900">🛠️ Kegiatan Pembenahan:</span> {{ $item->kegiatan_benahi }}</p>
            <p class="text-sm text-gray-600"><span class="font-medium text-gray-900">💰 Kegiatan ARKAS:</span> {{ $item->kegiatan_arkas }}</p>

            <div class="mt-4 flex justify-end gap-2">
                <a href="{{ route('rekomendasi-keseluruhan.edit', $item->id) }}"
                    class="inline-flex items-center px-4 py-1.5 bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-semibold rounded-md transition">
                    ✏️ Edit
                </a>
                <form action="{{ route('rekomendasi-keseluruhan.destroy', $item->id) }}" method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="inline-flex items-center px-4 py-1.5 bg-red-500 hover:bg-red-600 text-white text-xs font-semibold rounded-md transition">
                        🗑️ Hapus
                    </button>
                </form>
            </div>
        </div>
        @empty
        <div class="col-span-1 sm:col-span-2 lg:col-span-3">
            <div class="bg-white shadow rounded-xl p-6 text-center text-gray-700">
                <p>📭 Belum ada data rekomendasi.</p>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection