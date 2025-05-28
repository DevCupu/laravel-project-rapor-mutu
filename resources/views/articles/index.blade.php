<!-- resources/views/articles/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Artikel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-purple-50 min-h-screen py-10 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 mb-8">
            <h1 class="text-3xl font-bold text-purple-700">📚 Daftar Artikel</h1>
            <a href="{{ route('articles.create') }}"
               class="inline-flex items-center gap-2 px-5 py-2 bg-purple-600 hover:bg-purple-700 text-white text-sm font-medium rounded-lg shadow transition">
                ➕ Tambah Artikel
            </a>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6">
            @if ($articles->count())
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 text-sm text-gray-700">
                        <thead class="bg-purple-100 text-purple-700 font-semibold">
                            <tr>
                                <th class="px-4 py-3 text-left">#</th>
                                <th class="px-4 py-3 text-left">Judul</th>
                                <th class="px-4 py-3 text-left">Kategori</th>
                                <th class="px-4 py-3 text-left">Penulis</th>
                                <th class="px-4 py-3 text-left">Diterbitkan</th>
                                <th class="px-4 py-3 text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($articles as $article)
                                <tr>
                                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                                    <td class="px-4 py-3 font-medium text-gray-900">{{ $article->title }}</td>
                                    <td class="px-4 py-3">{{ $article->category ?? '-' }}</td>
                                    <td class="px-4 py-3">{{ $article->author ?? '-' }}</td>
                                    <td class="px-4 py-3">{{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('d M Y') : '-' }}</td>
                                    <td class="px-4 py-3 flex flex-wrap gap-2">
                                        <a href="{{ route('articles.edit', $article->id) }}"
                                           class="inline-flex items-center px-3 py-1.5 bg-yellow-400 hover:bg-yellow-500 text-white text-xs font-medium rounded transition">
                                            ✏️ Edit
                                        </a>
                                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                              onsubmit="return confirm('Yakin ingin hapus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="inline-flex items-center px-3 py-1.5 bg-red-500 hover:bg-red-600 text-white text-xs font-medium rounded transition">
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
                <p class="text-gray-500 text-center py-6">Belum ada artikel yang tersedia.</p>
            @endif
        </div>
    </div>
</body>
</html>
