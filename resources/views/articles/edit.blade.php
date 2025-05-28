<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Artikel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
        }

        .form-container {
            max-width: 700px;
            margin: auto;
            padding: 2rem;
            background-color: white;
            border-radius: 1rem;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
        }

        .form-label {
            font-weight: 600;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

        .btn-secondary {
            background-color: #adb5bd;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="form-container">
            <h3 class="mb-4 text-center">Edit Artikel</h3>
            <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea name="content" rows="6" class="form-control" required>{{ $article->content }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Penulis</label>
                    <input type="text" name="author" class="form-control" value="{{ $article->author }}">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <input type="text" name="category" class="form-control" value="{{ $article->category }}">
                </div>

                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail</label>
                    <input type="file" name="thumbnail" class="form-control">
                    @if ($article->thumbnail)
                        <small>Gambar saat ini:</small><br>
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="Thumbnail" width="120">
                    @endif
                </div>


                <div class="mb-3">
                    <label for="published_at" class="form-label">Tanggal Publikasi</label>
                    <input type="datetime-local" name="published_at" class="form-control"
                        value="{{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('Y-m-d\TH:i') : '' }}">
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('articles.index') }}" class="btn btn-secondary">← Kembali</a>
                    <button type="submit" class="btn btn-primary">💾 Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
