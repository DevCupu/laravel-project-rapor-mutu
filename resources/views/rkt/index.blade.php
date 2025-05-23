<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-extrabold text-white-900 dark:text-white">
            {{ __('📋 Lembar Rencana Kerja Tahunan') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            @if (session('success'))
                <div class="bg-green-50 border border-green-300 text-green-800 px-4 py-3 rounded-xl shadow-sm">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Tombol Tambah -->
            <div class="flex justify-end mb-4">
                <a href="{{ route('rkt.create') }}"
                    class="inline-flex items-center gap-2 px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl shadow transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah RKT
                </a>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow-md rounded-xl">
                <table class="min-w-full text-sm text-left text-gray-700 dark:text-gray-300">
                    <thead
                        class="bg-gray-100 dark:bg-gray-700 text-xs uppercase font-semibold text-gray-700 dark:text-gray-300">
                        <tr>
                            <th class="px-4 py-3">#</th>
                            <th class="px-4 py-3">Identifikasi</th>
                            <th class="px-4 py-3">Akar Masalah</th>
                            <th class="px-4 py-3">Kegiatan Benahi</th>
                            <th class="px-4 py-3">Penjelasan Implementasi</th>
                            <th class="px-4 py-3">Biaya</th>
                            <th class="px-4 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($rkt as $index => $item)
                            <tr class="border-b dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700">
                                <td class="px-4 py-3">{{ $index + 1 }}</td>
                                <td class="px-4 py-3">{{ $item->identifikasi }}</td>
                                <td class="px-4 py-3">{{ $item->akar_masalah }}</td>
                                <td class="px-4 py-3">{{ $item->kegiatan_benahi }}</td>
                                <td class="px-4 py-3">{{ $item->penjelasan_implementasi }}</td>
                                <td class="px-4 py-3">
                                    <span
                                        class="inline-flex px-2 py-1 rounded-full text-xs font-medium {{ $item->biaya_diperlukan ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                        {{ $item->biaya_diperlukan ? 'Ya' : 'Tidak' }}
                                    </span>
                                </td>
                                <td class="px-4 py-3 flex gap-2 justify-center">
                                    <a href="{{ route('rkt.edit', $item->id) }}"
                                        class="px-3 py-1 text-xs bg-indigo-600 text-white rounded hover:bg-indigo-700">Edit</a>
                                    <form action="{{ route('rkt.destroy', $item->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-3 py-1 text-xs bg-red-600 text-white rounded hover:bg-red-700">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center px-4 py-6 text-gray-500 dark:text-gray-400">
                                    Belum ada data RKT. Yuk, tambahkan sekarang!
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
