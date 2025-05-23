@php
    $data = $lrkra ?? null;
@endphp

{{-- Input Teks --}}
@foreach (['kegiatan_benahi','implementasi_kegiatan','kegiatan_arkas','uraian_kegiatan_arkas'] as $field)
    <div class="mb-4">
        <label for="{{ $field }}" class="block font-semibold text-gray-700 capitalize">
            {{ str_replace('_', ' ', $field) }}
        </label>
        <input 
            type="text" 
            name="{{ $field }}" 
            id="{{ $field }}"
            placeholder="Masukkan {{ str_replace('_', ' ', $field) }}"
            value="{{ old($field, $data->$field ?? '') }}" 
            class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-blue-500 @error($field) border-red-500 @enderror"
            required
        >
        @error($field)
            <p class="text-red-600 text-sm mt-1">⚠ {{ $message }}</p>
        @enderror
    </div>
@endforeach

{{-- Input Angka (Integer Only) --}}
@foreach (['jumlah','harga_satuan','total'] as $field)
    <div class="mb-4">
        <label for="{{ $field }}" class="block font-semibold text-gray-700 capitalize">
            {{ str_replace('_', ' ', $field) }}
        </label>
        <input 
            type="number" 
            name="{{ $field }}" 
            id="{{ $field }}"
            min="0" 
            step="1" {{-- Karena integer --}}
            placeholder="Masukkan {{ str_replace('_', ' ', $field) }}"
            value="{{ old($field, $data->$field ?? '') }}" 
            class="w-full border border-gray-300 px-3 py-2 rounded focus:outline-blue-500 @error($field) border-red-500 @enderror"
            required
            @if ($field === 'total') readonly @endif
        >
        @error($field)
            <p class="text-red-600 text-sm mt-1">⚠ {{ $message }}</p>
        @enderror
    </div>
@endforeach

{{-- Tombol --}}
<div class="flex justify-between items-center mt-6">
    <a href="{{ route('lrkra.index') }}" class="text-blue-600 hover:underline">← Kembali</a>
    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
        {{ $submit }}
    </button>
</div>

{{-- Auto Hitung Total --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const jumlah = document.querySelector('[name="jumlah"]');
        const harga = document.querySelector('[name="harga_satuan"]');
        const total = document.querySelector('[name="total"]');

        const hitungTotal = () => {
            const j = parseInt(jumlah.value) || 0;
            const h = parseInt(harga.value) || 0;
            total.value = j * h;
        };

        jumlah.addEventListener('input', hitungTotal);
        harga.addEventListener('input', hitungTotal);
    });
</script>
