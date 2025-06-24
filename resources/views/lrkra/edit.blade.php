@extends('layouts.app')

@section('content')
    <form action="{{ route('lrkra.update', $lrkra->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('lrkra.form', ['submit' => 'Update', 'lrkra' => $lrkra])
    </form>
@endsection
