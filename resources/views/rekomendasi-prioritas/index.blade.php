@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Daftar Rekomendasi PBD</h1>
            <a href="{{ route('rekomendasi-prioritas.create') }}"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                + Tambah Rekomendasi
            </a>
        </div>

        <a href="{{ route('rekomendasi-prioritas.card') }}" class="inline-block mb-4 text-sm text-blue-600 hover:underline">
            🔍 Lihat Tampilan Kartu
        </a>

        @if (session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full table-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border px-4 py-2">#</th>
                        <th class="border px-4 py-2">Kategori</th>
                        <th class="border px-4 py-2">Masalah</th>
                        <th class="border px-4 py-2">Kegiatan Benahi</th>
                        <th class="border px-4 py-2">Kegiatan ARKAS</th>
                        <th class="border px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border px-4 py-2">{{ $item->kategori }}</td>
                            <td class="border px-4 py-2 text-sm">{{ $item->masalah }}</td>
                            <td class="border px-4 py-2">{{ $item->kegiatan_benahi }}</td>
                            <td class="border px-4 py-2">{{ $item->kegiatan_arkas }}</td>


                            <td class="border px-4 py-2 space-x-2">
                                <a href="{{ route('rekomendasi-prioritas.edit', $item->id) }}"
                                    class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('rekomendasi-prioritas.destroy', $item->id) }}" method="POST"
                                    class="inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-gray-500 py-4">Belum ada data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
