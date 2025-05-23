<x-app-layout>
    <div class="max-w-7xl mx-auto px-6 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-semibold text-white">📋 Data LRKRA</h1>
            <a href="{{ route('lrkra.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                + Tambah Data
            </a>
        </div>

        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 text-green-800 border border-green-300 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto bg-white rounded shadow">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="text-xs uppercase bg-gray-50 text-gray-700 sticky top-0 z-10">
                    <tr>
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Kegiatan Benahi</th>
                        <th class="px-6 py-3">Implementasi</th>
                        <th class="px-6 py-3">Kegiatan Arkas</th>
                        <th class="px-6 py-3">Uraian</th>
                        <th class="px-6 py-3">Jumlah</th>
                        <th class="px-6 py-3">Harga</th>
                        <th class="px-6 py-3">Total</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse ($lrkra as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ $item->kegiatan_benahi }}</td>
                            <td class="px-6 py-4">{{ $item->implementasi_kegiatan }}</td>
                            <td class="px-6 py-4">{{ $item->kegiatan_arkas }}</td>
                            <td class="px-6 py-4">{{ $item->uraian_kegiatan_arkas }}</td>
                            <td class="px-6 py-4">{{ number_format($item->jumlah, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">Rp{{ number_format($item->harga_satuan, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 font-semibold text-green-600">Rp{{ number_format($item->total, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 text-center space-x-2">
                                <a href="{{ route('lrkra.edit', $item->id) }}" class="text-yellow-500 hover:text-yellow-600" title="Edit">
                                    ✏️
                                </a>
                                <form action="{{ route('lrkra.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-600" title="Hapus">
                                        🗑️
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center py-6 text-gray-500">Data belum tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
