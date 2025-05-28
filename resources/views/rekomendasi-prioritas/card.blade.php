@extends('layouts.app') {{-- atau sesuaikan dengan layout-mu --}}

@section('content')
<div class="max-w-screen-xl mx-auto py-10 px-4">
    <h1 class="text-2xl font-bold text-center mb-8 uppercase">
        Rekomendasi Prioritas PBD SMKS Wahyu 1 Makassar Tahun 2025
    </h1>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($data as $item)
        <div class="bg-white shadow-md rounded-xl p-5 border border-gray-200">
            <h2 class="text-lg font-bold mb-2">{{ $item->kategori }}</h2>
            <div class="mb-2">
                <strong>Masalah:</strong>
                <p class="text-sm text-gray-700">{{ $item->masalah }}</p>
            </div>
            <div class="mb-2">
                <strong>Kegiatan Benahi:</strong>
                <p class="text-sm text-gray-700 whitespace-pre-line">{{ $item->kegiatan_benahi }}</p>
            </div>
            <div>
                <strong>Kegiatan ARKAS:</strong>
                <p class="text-sm text-gray-700 whitespace-pre-line">{{ $item->kegiatan_arkas }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
