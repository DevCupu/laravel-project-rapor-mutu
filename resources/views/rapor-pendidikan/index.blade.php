@extends('layout')

@section('content')
    <form method="GET" action="{{ route('rapor-pendidikan.index') }}" class="mt-4 mb-4">
        <label for="tahun" class="font-medium mr-2">Filter Tahun:</label>
        <select name="tahun" id="tahun" onchange="this.form.submit()" class="px-3 py-2 border rounded">
            <option value="">-- Semua Tahun --</option>
            @foreach ($data->pluck('tahun')->unique()->sortDesc() as $tahun)
                <option value="{{ $tahun }}" {{ request('tahun') == $tahun ? 'selected' : '' }}>
                    {{ $tahun }}
                </option>
            @endforeach
        </select>
    </form>

    <div class="bg-gray-100 p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Rapor Pendidikan</h1>
            <a href="{{ route('rapor-pendidikan.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow">+ Tambah</a>
        </div>

        @if (session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($data as $d)
                <div class="bg-white p-4 rounded-lg border shadow-sm">
                    <div class="flex justify-between items-center mb-2">
                        <h2 class="text-lg font-semibold text-gray-800">{{ $d->indikator }}</h2>
                        <span
                            class="text-sm px-2 py-1 rounded-full 
                            {{ $d->kategori == 'Baik' ? 'bg-green-100 text-green-700' : ($d->kategori == 'Sedang' ? 'bg-yellow-100 text-yellow-700' : 'bg-red-100 text-red-700') }}">
                            {{ $d->kategori }}
                        </span>
                    </div>
                    <p class="text-sm text-gray-600 mb-2">Nilai: <strong>{{ $d->nilai }}</strong></p>
                    <p class="text-sm text-gray-600 mb-2">Tahun: {{ $d->tahun }}</p>
                    <p class="text-gray-700 text-sm">{{ $d->deskripsi }}</p>
                    <div class="flex justify-end mt-4 gap-2">
                        <a href="{{ route('rapor-pendidikan.edit', $d->id) }}"
                            class="text-blue-600 hover:underline text-sm">Edit</a>
                        <form action="{{ route('rapor-pendidikan.destroy', $d->id) }}" method="POST"
                            onsubmit="return confirm('Yakin hapus?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline text-sm">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
