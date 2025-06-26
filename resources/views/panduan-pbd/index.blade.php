@extends('layouts.app')

@section('header')
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Perencanaan Berbasis Data - SMKS Wahyu Makassar
    </h2>
@endsection

@section('content')
<div class="py-6 px-4 sm:px-6 lg:px-8">
    <x-back-to-dashboard>Kembali</x-back-to-dashboard>

    <div class="bg-white shadow p-6 rounded-xl mt-4">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Perancangan Rapor Pendidikan</h1>
        <p class="text-sm text-gray-600 mb-6">Berikut adalah ringkasan tahapan Perencanaan Berbasis Data (PBD) berdasarkan indikator dari Rapor Pendidikan Nasional.</p>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <!-- Identifikasi -->
            <div class="bg-blue-50 rounded-2xl shadow-sm p-6 hover:shadow-md transition-all">
                <div class="flex items-center gap-4 mb-3">
                    <div class="bg-blue-200 text-blue-700 p-2 rounded-full">
                        <i class="fas fa-search text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-lg text-blue-900">Identifikasi</h3>
                </div>
                <p class="text-sm text-gray-700">
                    Menentukan indikator prioritas berdasarkan hasil rapor pendidikan. Fokus pada capaian literasi, numerasi, dan iklim sekolah.
                </p>
            </div>

            <!-- Refleksi -->
            <div class="bg-yellow-50 rounded-2xl shadow-sm p-6 hover:shadow-md transition-all">
                <div class="flex items-center gap-4 mb-3">
                    <div class="bg-yellow-200 text-yellow-700 p-2 rounded-full">
                        <i class="fas fa-comments text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-lg text-yellow-900">Refleksi</h3>
                </div>
                <p class="text-sm text-gray-700">
                    Diskusi dengan warga sekolah dan pemangku kepentingan untuk memahami akar masalah dan tantangan di lapangan.
                </p>
            </div>

            <!-- Benahi -->
            <div class="bg-green-50 rounded-2xl shadow-sm p-6 hover:shadow-md transition-all">
                <div class="flex items-center gap-4 mb-3">
                    <div class="bg-green-200 text-green-700 p-2 rounded-full">
                        <i class="fas fa-tools text-xl"></i>
                    </div>
                    <h3 class="font-semibold text-lg text-green-900">Benahi</h3>
                </div>
                <p class="text-sm text-gray-700">
                    Menyusun rencana perbaikan seperti pelatihan guru, penguatan literasi, peningkatan fasilitas, dan lainnya.
                </p>
            </div>
        </div>

        <div class="mt-10 border-t pt-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Indikator Prioritas Sekolah</h2>
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-2">
                <!-- Literasi -->
                <x-rapor-card color="blue" icon="book" title="Kompetensi Literasi & Numerasi">
                    Hasil Asesmen Nasional menunjukkan peningkatan literasi dan numerasi dasar siswa.
                </x-rapor-card>

                <!-- Iklim -->
                <x-rapor-card color="yellow" icon="school" title="Iklim Sekolah Aman & Inklusif">
                    Lingkungan sekolah aman, mendukung, dan inklusif bagi semua peserta didik.
                </x-rapor-card>

                <!-- Pembelajaran -->
                <x-rapor-card color="green" icon="chalkboard-teacher" title="Kualitas Pembelajaran">
                    Guru aktif mengikuti pelatihan dan menerapkan strategi pembelajaran berdiferensiasi.
                </x-rapor-card>

                <!-- Manajemen -->
                <x-rapor-card color="red" icon="chart-line" title="Manajemen Berbasis Data">
                    Sekolah mulai mengintegrasikan sistem pengelolaan digital dan pengambilan keputusan berbasis data.
                </x-rapor-card>
            </div>
        </div>
    </div>
</div>
@endsection
