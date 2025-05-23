<x-app-layout>
    <div class="max-w-3xl mx-auto p-6 bg-white rounded shadow">
        <h1 class="text-2xl font-bold mb-6">Tambah LRKRA</h1>

        <form action="{{ route('lrkra.store') }}" method="POST">
            @csrf
            @include('lrkra.form', ['submit' => 'Simpan'])
        </form>
    </div>
</x-app-layout>
