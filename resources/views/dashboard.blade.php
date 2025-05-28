@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Dashboard') }}
    </h2>
@endsection

@section('content')
    <style>
        .clip-diagonal {
            clip-path: polygon(0 0, 100% 0, 100% 80%, 0% 100%);
        }
    </style>

    <div class="py-12 bg-gray-900 min-h-screen text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @php
                    $cards = [
                        [
                            'title' => 'Artikel',
                            'desc' => 'Kelola artikel-artikel Anda dengan mudah dan terorganisir.',
                            'route' => route('articles.index'),
                            'color' => 'from-purple-500 to-pink-500',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16h8M8 12h8m-6 8h6a2 2 0 002-2V8.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0013.586 2H6a2 2 0 00-2 2v16a2 2 0 002 2h2" />',
                            'span' => 'col-span-1',
                        ],
                        [
                            'title' => 'LRKRA',
                            'desc' => 'Kelola data LRKRA Anda secara efisien dan terstruktur.',
                            'route' => route('lrkra.index'),
                            'color' => 'from-green-400 to-emerald-500',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6m4 6v-4m4 4V7m-9 10H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-4" />',
                            'span' => 'col-span-1',
                        ],
                        [
                            'title' => 'RKT',
                            'desc' => 'Kelola lembar rencana kerja tahunan Anda.',
                            'route' => route('rkt.index'),
                            'color' => 'from-blue-500 to-cyan-500',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 18l4-4-4-4M21 18l-4-4 4-4M12 6v12" />',
                            'span' => 'col-span-1',
                        ],
                        [
                            'title' => 'Rapor Pendidikan',
                            'desc' => 'Kelola indikator dan nilai rapor pendidikan secara lengkap.',
                            'route' => route('rapor-pendidikan.index'),
                            'color' => 'from-yellow-400 to-yellow-500',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6M7 4h10a2 2 0 012 2v14l-4-4H7a2 2 0 01-2-2V6a2 2 0 012-2z" />',
                            'span' => 'col-span-1',
                        ],
                        [
                            'title' => 'Panduan PBD',
                            'desc' =>
                                'Temukan panduan lengkap dan praktik terbaik dalam penerapan Pembelajaran Berbasis Data.',
                            'route' => route('panduan-pbd.index'),
                            'color' => 'from-indigo-500 to-purple-600',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6l4 2" /><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none" />',
                            'span' => 'col-span-1',
                        ],
                        [
                            'title' => 'Rekomendasi Keseluruhan',
                            'desc' => 'Lihat hasil rekomendasi komprehensif berdasarkan data terkini.',
                            'route' => route('rekomendasi-keseluruhan.index'),
                            'color' => 'from-pink-500 to-rose-500',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />',
                            'span' => 'col-span-1',
                        ],
                        [
                            'title' => 'Rekomendasi Prioritas',
                            'desc' => 'Fokuskan pada rekomendasi prioritas untuk hasil yang cepat dan efektif.',
                            'route' => route('rekomendasi-prioritas.index'),
                            'color' => 'from-red-500 to-orange-500',
                            'icon' =>
                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />',
                            'span' => 'col-span-2',
                        ],
                    ];
                @endphp

                @foreach ($cards as $card)
                    <div
                        class="{{ $card['span'] }} bg-gray-800 max-w-full w-full rounded-2xl overflow-hidden shadow-lg hover:scale-[1.02] transition-all flex flex-col justify-between">
                        <div>
                            <div class="relative h-32">
                                <div
                                    class="absolute inset-0 bg-gradient-to-tr {{ $card['color'] }} opacity-60 clip-diagonal">
                                </div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        {!! $card['icon'] !!}
                                    </svg>
                                </div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-xl font-bold mb-2">{{ $card['title'] }}</h3>
                                <p class="text-sm text-gray-300">{{ $card['desc'] }}</p>
                            </div>
                        </div>
                        <div class="px-6 pb-6">
                            <a href="{{ $card['route'] }}"
                                class="inline-block w-full text-center px-4 py-2 bg-white text-gray-800 text-sm font-semibold rounded hover:bg-gray-200 transition">
                                Lihat {{ $card['title'] }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
