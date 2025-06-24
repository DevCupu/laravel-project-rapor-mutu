<!-- resources/views/articles/index.blade.php -->
@extends('layouts.app')

@section('header')
    <h1 class="text-3xl font-bold text-white">📋 Data LRKRA</h1>
@endsection

@section('content')

    <body class="bg-[#f8f9fb] min-h-screen py-10 px-6 text-gray-800 mt-6">

        <div class="max-w-6xl mx-auto mt-5">
            <x-back-to-dashboard>Kembali</x-back-to-dashboard>

            @if (session('success'))
                <div id="alert-success"
                    class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded-lg mb-6 shadow-sm mt-4">
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

            <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-10 mt-8">
                <h1 class="text-3xl font-bold text-[#7083C3] tracking-tight">📚 Daftar Artikel</h1>
                <a href="{{ route('articles.create') }}"
                    class="inline-flex items-center gap-2 px-5 py-2 bg-[#7083C3] hover:bg-[#5c6bb2] text-white text-sm font-semibold rounded-xl shadow-md transition-all duration-200">
                    ➕ Tambah Artikel
                </a>
            </div>

            <div class="bg-white shadow-lg rounded-3xl p-6 border border-[#e2e8f0]">
                @if ($articles->count())
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 text-sm">
                            <thead class="bg-[#eef1fa] text-[#3f4e87] font-semibold text-left">
                                <tr>
                                    <th class="px-5 py-4">No</th>
                                    <th class="px-5 py-4">Judul</th>
                                    <th class="px-5 py-4">Kategori</th>
                                    <th class="px-5 py-4">Penulis</th>
                                    <th class="px-5 py-4">Diterbitkan</th>
                                    <th class="px-5 py-4">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-gray-700">
                                @foreach ($articles as $article)
                                    <tr class="hover:bg-[#f9fafc] transition-colors">
                                        <td class="px-5 py-4">{{ $loop->iteration }}</td>
                                        <td class="px-5 py-4 font-semibold text-gray-900">{{ $article->title }}</td>
                                        <td class="px-5 py-4">{{ $article->category ?? '-' }}</td>
                                        <td class="px-5 py-4">{{ $article->author ?? '-' }}</td>
                                        <td class="px-5 py-4">
                                            {{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('d M Y') : '-' }}
                                        </td>
                                        <td class="px-5 py-4 flex flex-wrap gap-2">
                                            <a href="{{ route('articles.edit', $article->id) }}"
                                                class="inline-flex items-center px-3 py-1.5 bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-medium rounded-lg transition-shadow shadow-sm">
                                                ✏️ Edit
                                            </a>
                                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin hapus?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center px-3 py-1.5 bg-red-500 hover:bg-red-600 text-white text-xs font-medium rounded-lg transition-shadow shadow-sm">
                                                    🗑️ Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center py-12 text-gray-500">
                        <svg class="mx-auto h-16 w-16 text-[#cbd5e1]" fill="none" stroke="currentColor"
                            stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8v4l3 3m6 1.5a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="mt-4 text-lg">Belum ada artikel yang tersedia.</p>
                    </div>
                @endif
            </div>
        </div>
    </body>
@endsection
