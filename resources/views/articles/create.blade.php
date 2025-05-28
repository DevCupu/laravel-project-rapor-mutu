<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Artikel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-purple-50 min-h-screen py-10 px-6">
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-purple-700 mb-6">📝 Tambah Artikel</h2>

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label for="title" class="block text-sm font-medium text-purple-800 mb-1">Judul</label>
                <input type="text" name="title" id="title" required
                       class="w-full px-4 py-2 border border-purple-300 rounded-md focus:ring-2 focus:ring-purple-500">
            </div>

            <div>
                <label for="content" class="block text-sm font-medium text-purple-800 mb-1">Konten</label>
                <textarea name="content" id="content" rows="6" required
                          class="w-full px-4 py-2 border border-purple-300 rounded-md focus:ring-2 focus:ring-purple-500"></textarea>
            </div>

            <div>
                <label for="author" class="block text-sm font-medium text-purple-800 mb-1">Penulis</label>
                <input type="text" name="author" id="author"
                       class="w-full px-4 py-2 border border-purple-300 rounded-md focus:ring-2 focus:ring-purple-500">
            </div>

            <div>
                <label for="category" class="block text-sm font-medium text-purple-800 mb-1">Kategori</label>
                <input type="text" name="category" id="category"
                       class="w-full px-4 py-2 border border-purple-300 rounded-md focus:ring-2 focus:ring-purple-500">
            </div>

            <div>
                <label for="published_at" class="block text-sm font-medium text-purple-800 mb-1">Tanggal Publikasi</label>
                <input type="datetime-local" name="published_at" id="published_at"
                       class="w-full px-4 py-2 border border-purple-300 rounded-md focus:ring-2 focus:ring-purple-500">
            </div>

            <div>
                <label for="thumbnail" class="block text-sm font-medium text-purple-800 mb-1">Gambar Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" accept="image/*"
                       class="w-full px-4 py-2 border border-purple-300 rounded-md file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-purple-100 file:text-purple-700 hover:file:bg-purple-200">
            </div>

            <div class="flex justify-between">
                <a href="{{ route('articles.index') }}"
                   class="inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-400 text-sm font-medium rounded-md text-gray-700">
                    ← Kembali
                </a>
                <button type="submit"
                        class="inline-flex items-center px-6 py-2 bg-purple-600 hover:bg-purple-700 text-white text-sm font-semibold rounded-md shadow">
                    Simpan Artikel
                </button>
            </div>
        </form>
    </div>
</body>
</html>
