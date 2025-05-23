<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Artikel Card (Wide) -->
                <div
                    class="col-span-1 md:col-span-2 lg:col-span-3 bg-white dark:bg-gray-800 rounded-2xl shadow-md overflow-hidden">
                    <div class="flex flex-col lg:flex-row items-center p-6 gap-6">
                        <!-- Icon Artikel -->
                        <div
                            class="relative w-full lg:w-1/3 h-48 bg-purple-100 flex items-center justify-center rounded-lg shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-purple-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 16h8M8 12h8m-6 8h6a2 2 0 002-2V8.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0013.586 2H6a2 2 0 00-2 2v16a2 2 0 002 2h2" />
                            </svg>
                        </div>

                        <!-- Konten -->
                        <div class="flex-1">
                            <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200">Artikel</h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-400">
                                Kelola artikel-artikel Anda dengan mudah dan terorganisir. Tambah, edit, atau hapus
                                artikel dari dashboard ini.
                            </p>
                            <a href="{{ route('articles.index') }}"
                                class="inline-block mt-4 px-6 py-2 bg-purple-600 text-white font-medium rounded-md hover:bg-purple-700 transition">
                                Lihat Artikel
                            </a>
                        </div>
                    </div>
                </div>

                <!-- LRKRA Card -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-md p-6">
                    <div class="flex items-center">
                        <!-- Icon LRKRA -->
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 17v-6m4 6v-4m4 4V7m-9 10H5a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-4" />
                            </svg>
                        </div>

                        <!-- Konten -->
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Lembar Rencana Kegiatan &
                                Realisasi (LRKRA)</h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-400">Kelola data LRKRA Anda secara efisien dan
                                terstruktur.</p>
                            <a href="{{ route('lrkra.index') }}"
                                class="inline-block mt-4 px-6 py-2 bg-green-600 text-white font-medium rounded-md hover:bg-green-700 transition">
                                Lihat LRKRA
                            </a>
                        </div>
                    </div>
                </div>

                <!-- RKT Card with Icon -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-md p-6">
                    <div class="flex items-center">
                        <!-- Icon RKT -->
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 18l4-4-4-4M21 18l-4-4 4-4M12 6v12" />
                            </svg>
                        </div>

                        <!-- Konten -->
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Lembar Rencana Kerja
                                Tahunan (RKT)</h3>
                            <p class="mt-2 text-gray-600 dark:text-gray-400">Kelola lembar rencana kerja tahunan Anda.
                            </p>
                            <a href="{{ route('rkt.index') }}"
                                class="inline-block mt-4 px-6 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 transition">
                                Lihat RKT
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
