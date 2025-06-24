<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Artikel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(to right, #e0e7ff, #f8fafc);
        }

        .glass-card {
            backdrop-filter: blur(16px);
            background-color: rgba(255, 255, 255, 0.85);
            border: 1px solid rgba(229, 231, 235, 0.6);
        }

        .form-group {
            position: relative;
        }

        .form-input {
            padding-top: 1.25rem;
            padding-bottom: 0.5rem;
        }

        .form-label {
            position: absolute;
            top: 0.75rem;
            left: 1rem;
            font-size: 0.85rem;
            color: #6b7280;
            pointer-events: none;
            transition: 0.2s ease all;
        }

        .form-input:focus + .form-label,
        .form-input:not(:placeholder-shown) + .form-label {
            top: 0.3rem;
            font-size: 0.75rem;
            color: #6D83F2;
        }
    </style>
</head>

<body class="min-h-screen py-10 px-4 text-gray-800">
    <div class="max-w-3xl mx-auto p-8 rounded-3xl shadow-xl glass-card">
        <h2 class="text-3xl font-bold text-[#6D83F2] mb-8 text-center">✏️ Edit Artikel</h2>

        <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="space-y-7">
            @csrf
            @method('PUT')

            <!-- Judul -->
            <div class="form-group">
                <input type="text" name="title" id="title" required placeholder=" "
                       value="{{ $article->title }}"
                       class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#6D83F2] focus:border-[#6D83F2] transition">
                <label for="title" class="form-label">Judul</label>
            </div>

            <!-- Konten -->
            <div class="form-group">
                <textarea name="content" id="content" rows="6" required placeholder=" "
                          class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#6D83F2] focus:border-[#6D83F2] transition resize-y">{{ $article->content }}</textarea>
                <label for="content" class="form-label">Konten</label>
            </div>

            <!-- Penulis -->
            <div class="form-group">
                <input type="text" name="author" id="author" placeholder=" "
                       value="{{ $article->author }}"
                       class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#6D83F2] focus:border-[#6D83F2] transition">
                <label for="author" class="form-label">Penulis</label>
            </div>

            <!-- Kategori -->
            <div class="form-group">
                <input type="text" name="category" id="category" placeholder=" "
                       value="{{ $article->category }}"
                       class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#6D83F2] focus:border-[#6D83F2] transition">
                <label for="category" class="form-label">Kategori</label>
            </div>

            <!-- Thumbnail -->
            <div>
                <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-2">Thumbnail Baru</label>
                <input type="file" name="thumbnail" id="thumbnail" accept="image/*"
                       class="block w-full text-sm text-gray-600 border border-gray-300 rounded-xl file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-[#e7eafe] file:text-[#6D83F2] hover:file:bg-[#d6dbff] transition">
                @if ($article->thumbnail)
                    <div class="mt-3">
                        <p class="text-sm text-gray-600 mb-1">Thumbnail saat ini:</p>
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="Thumbnail" class="w-28 rounded shadow">
                    </div>
                @endif
            </div>

            <!-- Tanggal Publikasi -->
            <div class="form-group">
                <input type="datetime-local" name="published_at" id="published_at" placeholder=" "
                       value="{{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('Y-m-d\TH:i') : '' }}"
                       class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#6D83F2] focus:border-[#6D83F2] transition">
                <label for="published_at" class="form-label">Tanggal Publikasi</label>
            </div>

            <!-- Tombol -->
            <div class="flex justify-between items-center pt-4">
                <a href="{{ route('articles.index') }}"
                   class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-600 bg-transparent border border-gray-300 rounded-xl hover:bg-gray-100 transition">
                    ← Kembali
                </a>
                <button type="submit"
                        class="inline-flex items-center px-6 py-2 bg-[#6D83F2] hover:bg-[#4f65d4] text-white text-sm font-semibold rounded-xl shadow transition">
                    💾 Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</body>

</html>
