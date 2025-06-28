@extends('layouts.admin')

@section('title', 'Tambah Beasiswa')

@section('content')
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Beasiswa Baru</h1>
    </div>

    <form action="{{ route('admin.beasiswa.store') }}" method="POST">
        @csrf
        @include('admin.beasiswa._form')
    </form>
@endsection