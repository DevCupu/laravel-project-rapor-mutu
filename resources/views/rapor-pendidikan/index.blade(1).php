@extends('layout')

@section('content')
<x-back-to-dashboard>Kembali</x-back-to-dashboard>

{{-- Filter Tahun --}}
<form method="GET" action="{{ route('rapor-pendidikan.index') }}" class="mt-6 mb-6 flex flex-wrap items-center gap-4">
    <label for="tahun" class="font-medium text-gray-700 dark:text-gray-200">Filter Tahun:</label>
    <select name="tahun" id="tahun" onchange="this.form.submit()"
        class="px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-[#7083C3]">
        <option value="">-- Semua Tahun --</option>
        @foreach ($data->pluck('tahun')->unique()->sortDesc() as $tahun)
        <option value="{{ $tahun }}" {{ request('tahun') == $tahun ? 'selected' : '' }}>
            {{ $tahun }}
        </option>
        @endforeach
    </select>
</form>

{{-- Container --}}
<div class="bg-white dark:bg-gray-900 p-8 rounded-3xl shadow-xl border border-gray-200 dark:border-gray-700">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8 gap-4">
        <h1 class="text-3xl font-bold text-[#7083C3]">📊 Rapor Pendidikan</h1>
        <a href="{{ route('rapor-pendidikan.create') }}"
            class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-medium px-5 py-2.5 rounded-xl shadow transition">
            ➕ Tambah Data
        </a>
    </div>

    {{-- Alert Sukses --}}
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

    {{-- Data Grid --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($data as $d)
        <div class="bg-gray-100 dark:bg-gray-800 p-6 rounded-2xl border border-gray-200 dark:border-gray-700 shadow-sm hover:shadow-md transition">
            <div class="flex justify-between items-start mb-4">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $d->indikator }}</h2>
                <span class="text-xs font-semibold px-3 py-1 rounded-full
                            {{ $d->kategori == 'Baik' ? 'bg-green-100 text-green-700' :
                               ($d->kategori == 'Sedang' ? 'bg-yellow-100 text-yellow-700' :
                               'bg-red-100 text-red-700') }}">
                    {{ $d->kategori }}
                </span>
            </div>
            <ul class="text-sm text-gray-700 dark:text-gray-300 space-y-1 mb-4">
                <li><strong>Nilai:</strong> {{ $d->nilai }}</li>
                <li><strong>Tahun:</strong> {{ $d->tahun }}</li>
                <li>{{ $d->deskripsi }}</li>
            </ul>
            <div class="flex justify-end gap-4 text-sm ">
                <a href="{{ route('rapor-pendidikan.edit', $d->id) }}"
                    class="inline-flex items-center px-3 py-1.5 bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-medium rounded-lg transition-shadow shadow-sm">
                    ✏️ Edit</a>
                <form action="{{ route('rapor-pendidikan.destroy', $d->id) }}" method="POST"
                    onsubmit="return confirm('Yakin hapus data ini?')">
                    @csrf @method('DELETE')
                    <button type="submit" class="inline-flex items-center px-3 py-1.5 bg-red-500 hover:bg-red-600 text-white text-xs font-medium rounded-lg transition-shadow shadow-sm">
                        🗑️ Hapus</button>
                </form>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center text-gray-500 dark:text-gray-400">
            Tidak ada data untuk tahun ini.
        </div>
        @endforelse
    </div>
</div>
@endsection