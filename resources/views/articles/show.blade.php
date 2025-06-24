@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-indigo-50 to-white py-12 px-4">
        <div class="max-w-4xl mx-auto">
            <article class="bg-white/70 backdrop-blur-xl border border-gray-200 rounded-3xl shadow-2xl p-10 transition-all duration-300">

                <!-- Judul -->
                <h1 class="text-5xl font-extrabold mb-6 text-gray-900 leading-tight tracking-tight text-center">
                    {{ $article->title }}
                </h1>

                <!-- Thumbnail -->
                @if ($article->thumbnail)
                    <div class="flex justify-center mb-8">
                        <img src="{{ asset('storage/' . $article->thumbnail) }}"
                             alt="{{ $article->title }}"
                             class="w-full max-w-2xl max-h-[400px] object-cover rounded-xl shadow-md">
                    </div>
                @endif

                <!-- Meta Info -->
                <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-600 mb-10">
                    <div class="flex items-center gap-1">
                        <span>📅</span>
                        <span>{{ \Carbon\Carbon::parse($article->published_at)->translatedFormat('d F Y') }}</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <span>👤</span>
                        <span>{{ $article->author }}</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <span>🏷️</span>
                        <span>{{ $article->category }}</span>
                    </div>
                </div>

                <!-- Konten -->
                <div class="prose prose-lg prose-indigo max-w-none text-gray-800 leading-relaxed">
                    {!! $article->content !!}
                </div>

                <!-- Kembali -->
                <div class="mt-12 text-center">
                    <a href="{{ url('/') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold text-sm rounded-xl shadow transition-all duration-300">
                        ← Kembali ke Beranda
                    </a>
                </div>
            </article>
        </div>
    </div>
@endsection
