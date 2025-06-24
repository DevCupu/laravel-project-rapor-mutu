<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Artikel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
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
            color: #7083C3;
        }
    </style>
</head>
<body class="bg-[#f4f6fa] min-h-screen py-10 px-4 text-gray-800">
    <div class="max-w-3xl mx-auto bg-white p-10 rounded-3xl shadow-xl border border-gray-200">
        <h2 class="text-3xl font-bold text-[#7083C3] mb-10 tracking-tight">📝 Tambah Artikel</h2>

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf

            <!-- Judul -->
            <div class="form-group">
                <input type="text" name="title" id="title" required placeholder=" "
                       class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#7083C3] focus:border-[#7083C3] transition"/>
                <label for="title" class="form-label">Judul</label>
            </div>

            <!-- Konten -->
            <div class="form-group">
                <textarea name="content" id="content" rows="6" required placeholder=" "
                          class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#7083C3] focus:border-[#7083C3] transition resize-y"></textarea>
                <label for="content" class="form-label">Konten</label>
            </div>

            <!-- Penulis -->
            <div class="form-group">
                <input type="text" name="author" id="author" placeholder=" "
                       class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#7083C3] focus:border-[#7083C3] transition"/>
                <label for="author" class="form-label">Penulis</label>
            </div>

            <!-- Kategori -->
            <div class="form-group">
                <input type="text" name="category" id="category" placeholder=" "
                       class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#7083C3] focus:border-[#7083C3] transition"/>
                <label for="category" class="form-label">Kategori</label>
            </div>

            <!-- Tanggal Publikasi -->
            <div class="form-group">
                <input type="datetime-local" name="published_at" id="published_at" placeholder=" "
                       class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#7083C3] focus:border-[#7083C3] transition"/>
                <label for="published_at" class="form-label">Tanggal Publikasi</label>
            </div>

            <!-- Thumbnail -->
            <div>
                <label for="thumbnail" class="block text-sm font-medium text-gray-700 mb-2">Gambar Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" accept="image/*"
                       class="block w-full text-sm text-gray-600 border border-gray-300 rounded-xl file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-[#e7eaf9] file:text-[#7083C3] hover:file:bg-[#d7defa] transition"/>
            </div>

            <!-- Tombol -->
            <div class="flex justify-between items-center pt-4">
                <a href="{{ route('articles.index') }}"
                   class="inline-flex items-center px-4 py-2 text-sm font-bold text-gray-600 bg-transparent border border-gray-300 rounded-xl hover:bg-gray-100 transition">
                    ← Kembali
                </a>
                <button type="submit"
                        class="inline-flex items-center px-6 py-2 bg-[#7083C3] hover:bg-[#5c6bb2] text-white text-sm font-semibold rounded-xl shadow transition">
                    Simpan Artikel
                </button>
            </div>
        </form>
    </div>
</body>
</html>
