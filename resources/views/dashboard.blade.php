@extends('layouts.app')

@section('header')
<h2 class="font-semibold text-xl text-[#1A202C] dark:text-gray-200 leading-tight">
    {{ __('Dashboard') }}
</h2>
@endsection

@section('content')
<style>
    .clip-diagonal {
        clip-path: polygon(0 0, 100% 0, 100% 80%, 0% 100%);
    }
</style>

<div class="py-12 bg-[#F7FAFC] dark:bg-gray-900 min-h-screen text-[#1A202C] dark:text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @php
            $cards = [
            [
            'title' => 'Artikel',
            'desc' => 'Kelola artikel-artikel Anda dengan mudah dan terorganisir.',
            'route' => route('articles.index'),
            'color' => 'from-[#7083C3] to-[#A3B3E5]',
            'icon' =>
            '
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h10M7 11h10M7 15h6M5 3h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2z" />',
            'span' => 'col-span-1',
            ],
            [
            'title' => 'LRKRA',
            'desc' => 'Kelola data LRKRA Anda secara efisien dan terstruktur.',
            'route' => route('lrkra.index'),
            'color' => 'from-emerald-400 to-emerald-500',
            'icon' =>
            '
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M6 10h4v10H6V10zm8 0h4v6h-4v-6z" />',
            'span' => 'col-span-1',
            ],
            [
            'title' => 'RKT',
            'desc' => 'Kelola lembar rencana kerja tahunan Anda.',
            'route' => route('rkt.index'),
            'color' => 'from-[#7083C3] to-cyan-400',
            'icon' =>
            '
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3M5 11h14M5 19h14M5 15h14" />',
            'span' => 'col-span-1',
            ],
            [
            'title' => 'Rapor Pendidikan',
            'desc' => 'Kelola indikator dan nilai rapor pendidikan secara lengkap.',
            'route' => route('rapor-pendidikan.index'),
            'color' => 'from-yellow-400 to-yellow-500',
            'icon' =>
            '
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9M12 4h9M3 4h6v16H3z" />',
            'span' => 'col-span-1',
            ],
            [
            'title' => 'Panduan PBD',
            'desc' =>
            'Temukan panduan lengkap dan praktik terbaik dalam penerapan Pembelajaran Berbasis Data.',
            'route' => route('panduan-pbd.index'),
            'color' => 'from-[#A3B3E5] to-[#7083C3]',
            'icon' =>
            '
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a7 7 0 017 7c0 2.89-2 5.33-4 6v2a1 1 0 01-1 1h-4a1 1 0 01-1-1v-2c-2-0.67-4-3.11-4-6a7 7 0 017-7z" />',
            'span' => 'col-span-1',
            ],
            [
            'title' => 'Rekomendasi Keseluruhan',
            'desc' => 'Lihat hasil rekomendasi komprehensif berdasarkan data terkini.',
            'route' => route('rekomendasi-keseluruhan.index'),
            'color' => 'from-rose-400 to-pink-500',
            'icon' =>
            '
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v18h18M9 17V9m4 8V5m4 12v-4" />',
            'span' => 'col-span-1',
            ],
            [
            'title' => 'Rekomendasi Prioritas',
            'desc' => 'Fokuskan pada rekomendasi prioritas untuk hasil yang cepat dan efektif.',
            'route' => route('rekomendasi-prioritas.index'),
            'color' => 'from-[#7083C3] to-[#4A5568]',
            'icon' =>
            '
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 3v18m0-18h11l-1.5 4L16 11H5" />
            ',
            'span' => 'col-span-2',
            ],
            ];
            @endphp

            @foreach ($cards as $card)
            <div
                class="{{ $card['span'] }} bg-white dark:bg-[#2D3748] max-w-full w-full rounded-2xl overflow-hidden shadow-lg hover:scale-[1.02] transition-all flex flex-col justify-between">
                <div>
                    <div class="relative h-32">
                        <div
                            class="absolute inset-0 bg-gradient-to-tr {{ $card['color'] }} opacity-70 clip-diagonal">
                        </div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-black" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                {!! $card['icon'] !!}
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2 text-[#1A202C] dark:text-white">{{ $card['title'] }}</h3>
                        <p class="text-sm text-[#718096] dark:text-gray-300">{{ $card['desc'] }}</p>
                    </div>
                </div>
                <div class="px-6 pb-6">
                    <a href="{{ $card['route'] }}"
                        class="inline-block w-full text-center px-4 py-2 bg-[#7083C3] text-white text-sm font-semibold rounded hover:bg-[#5A6FB0] transition">
                        Lihat {{ $card['title'] }}
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection