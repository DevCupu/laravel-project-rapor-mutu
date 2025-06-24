@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Rapor Mutu Pendidikan - SMKS Wahyu Makassar
    </h2>
@endsection

@section('content')
<div class="py-6 px-4 sm:px-6 lg:px-8">
    <x-back-to-dashboard>Kembali</x-back-to-dashboard>
    <div class="bg-white shadow p-6 rounded-lg mt-2">
        <div class="flex justify-between items-center mb-6 flex-wrap gap-4">
            <h1 class="text-xl font-bold text-gray-800">Ringkasan Rapor Mutu Pendidikan</h1>
        </div>

        <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2">
            <!-- Card 1 -->
            <div class="relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 p-0 overflow-visible">
                <div class="absolute -top-8 left-6 bg-blue-100 rounded-full p-3 shadow-md">
                    <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M8 16l4-4 4 4M8 8l4 4 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pt-10 pb-4 px-6">
                    <h3 class="text-lg font-semibold text-gray-800">Kompetensi Siswa</h3>
                    <p class="text-sm text-gray-600 mt-2">Sebagian besar siswa menunjukkan peningkatan dalam literasi dan numerasi dasar.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 p-0 overflow-visible">
                <div class="absolute -top-8 left-6 bg-green-100 rounded-full p-3 shadow-md">
                    <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pt-10 pb-4 px-6">
                    <h3 class="text-lg font-semibold text-gray-800">Manajemen Sekolah</h3>
                    <p class="text-sm text-gray-600 mt-2">Sekolah telah mengembangkan sistem pengelolaan berbasis digital secara bertahap.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 p-0 overflow-visible">
                <div class="absolute -top-8 left-6 bg-yellow-100 rounded-full p-3 shadow-md">
                    <svg class="w-10 h-10 text-yellow-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M9.75 9.75h4.5v4.5h-4.5z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.5 4.5h15v15h-15z" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pt-10 pb-4 px-6">
                    <h3 class="text-lg font-semibold text-gray-800">Kualitas Guru</h3>
                    <p class="text-sm text-gray-600 mt-2">Peningkatan kualitas guru melalui pelatihan rutin dan sertifikasi pendidikan.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 border border-gray-100 p-0 overflow-visible">
                <div class="absolute -top-8 left-6 bg-red-100 rounded-full p-3 shadow-md">
                    <svg class="w-10 h-10 text-red-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pt-10 pb-4 px-6">
                    <h3 class="text-lg font-semibold text-gray-800">Lingkungan Belajar</h3>
                    <p class="text-sm text-gray-600 mt-2">Lingkungan sekolah mendukung proses belajar mengajar yang kondusif dan aman.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
