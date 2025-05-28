@extends('layouts.app')
&nbsp;
&nbsp;

@section('content')
<div class="max-w-6xl mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Rekomendasi PBD</h1>
        <a href="{{ route('rekomendasi-keseluruhan.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Tambah Rekomendasi
        </a>
    </div>
&nbsp;
&nbsp;

    @if (session('success'))
        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded">
            {{ session('success') }}
        </div>
    @endif
&nbsp;
&nbsp;

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($data as $item)
        <div class="bg-white shadow-md rounded-lg p-4">
            <h2 class="text-lg font-semibold">{{ $item->kategori }}</h2>
            <p class="mt-2"><strong>Masalah:</strong> {{ $item->masalah }}</p>
            <p class="mt-2"><strong>Kegiatan Pembenahan:</strong> {{ $item->kegiatan_benahi }}</p>
            <p class="mt-2"><strong>Kegiatan ARKAS:</strong> {{ $item->kegiatan_arkas }}</p>
            <div class="mt-4 flex gap-2">
                <a href="{{ route('rekomendasi-keseluruhan.edit', $item->id) }}" class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">Edit</a>
                <form action="{{ route('rekomendasi-keseluruhan.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Hapus</button>
                </form>
            </div>
        </div>
        @empty
        <div class="col-span-1 sm:col-span-2 lg:col-span-3">
            <div class="bg-white shadow-md rounded-lg p-4 text-center">
                <p>Belum ada data.</p>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection