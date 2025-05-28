@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-6">Edit LRKRA</h1>

    <form action="{{ route('lrkra.update', $lrkra->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('lrkra.form', ['submit' => 'Update', 'lrkra' => $lrkra])
    </form>
</div>
@endsection
