@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <article class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-4xl font-extrabold mb-6 text-gray-900">{{ $article->title }}</h1>

            @if ($article->thumbnail)
                <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->title }}"
                    class="w-full max-w-md max-h-64 object-cover rounded-md mb-6 shadow-md mx-auto" />
            @endif

            <div class="flex flex-wrap text-sm text-gray-500 mb-8 space-x-4">
                <span>📅 {{ \Carbon\Carbon::parse($article->published_at)->translatedFormat('d F Y') }}</span>
                <span>👤 {{ $article->author }}</span>
                <span>🏷️ {{ $article->category }}</span>
            </div>

            <div class="prose prose-lg max-w-none text-gray-800 leading-relaxed">
                {!! $article->content !!}
            </div>

            <div class="mt-10">
                <a href="{{ url('/') }}"
                    class="inline-block px-5 py-3 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition">
                    ← Kembali ke Beranda
                </a>
            </div>
        </article>
    </div>
@endsection
