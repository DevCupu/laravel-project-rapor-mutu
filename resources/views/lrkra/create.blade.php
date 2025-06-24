@extends('layouts.app')

@section('header')
    <h1 class="text-2xl font-semibold text-white">Tambah LRKRA</h1>
@endsection

@section('content')

        <form action="{{ route('lrkra.store') }}" method="POST">
            @csrf
            @include('lrkra.form', ['submit' => 'Simpan'])
        </form>
@endsection
