@php
    $data = $lrkra ?? null;
@endphp

<div class="bg-white p-10 rounded-3xl shadow-xl border border-gray-200 max-w-3xl mx-auto">
    <h2 class="text-3xl font-bold text-[#7083C3] mb-10 tracking-tight">📋 {{ $submit }} Data LRKRA</h2>

    {{-- FORM START --}}
    @foreach (['kegiatan_benahi','implementasi_kegiatan','kegiatan_arkas','uraian_kegiatan_arkas'] as $field)
        <div class="form-group mb-8">
            <input 
                type="text" 
                name="{{ $field }}" 
                id="{{ $field }}"
                required 
                placeholder=" "
                value="{{ old($field, $data->$field ?? '') }}" 
                class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#7083C3] focus:border-[#7083C3] transition @error($field) border-red-500 @enderror"
            >
            <label for="{{ $field }}" class="form-label">
                {{ ucwords(str_replace('_', ' ', $field)) }}
            </label>
            @error($field)
                <p class="text-red-600 text-sm mt-1">⚠ {{ $message }}</p>
            @enderror
        </div>
    @endforeach

    @foreach (['jumlah','harga_satuan','total'] as $field)
        <div class="form-group mb-8">
            <input 
                type="number" 
                name="{{ $field }}" 
                id="{{ $field }}"
                min="0" 
                step="1" 
                required
                placeholder=" "
                value="{{ old($field, $data->$field ?? '') }}" 
                class="form-input w-full px-4 pt-6 pb-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#7083C3] focus:border-[#7083C3] transition @error($field) border-red-500 @enderror"
                @if ($field === 'total') readonly @endif
            >
            <label for="{{ $field }}" class="form-label">
                {{ ucwords(str_replace('_', ' ', $field)) }}
            </label>
            @error($field)
                <p class="text-red-600 text-sm mt-1">⚠ {{ $message }}</p>
            @enderror
        </div>
    @endforeach

    {{-- BUTTONS --}}
    <div class="flex justify-between items-center pt-4">
        <a href="{{ route('lrkra.index') }}"
           class="inline-flex items-center px-4 py-2 text-sm font-bold text-gray-600 bg-transparent border border-gray-300 rounded-xl hover:bg-gray-100 transition">
            ← Kembali
        </a>
        <button type="submit"
                class="inline-flex items-center px-6 py-2 bg-[#7083C3] hover:bg-[#5c6bb2] text-white text-sm font-semibold rounded-xl shadow transition">
            {{ $submit }}
        </button>
    </div>
</div>

{{-- Floating Label Styles --}}
<style>
    .form-group {
        position: relative;
    }

    .form-input {
        padding-top: 1.25rem;
        padding-bottom: 0.5rem;
    }

    .form-label {
        position: absolute;
        top: 0.75rem;
        left: 1rem;
        font-size: 1rem;
        color: #6b7280;
        pointer-events: none;
        transition: 0.2s ease all;
    }

    .form-input:focus + .form-label,
    .form-input:not(:placeholder-shown) + .form-label {
        top: 0.3rem;
        font-size: 0.75rem;
        color: #7083C3;
    }
</style>

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
