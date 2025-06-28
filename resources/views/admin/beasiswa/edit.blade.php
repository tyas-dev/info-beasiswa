@extends('layouts.admin')

@section('title', 'Edit Beasiswa')

@section('content')
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Beasiswa: {{ $beasiswa->nama_beasiswa }}</h1>
    </div>

    <form action="{{ route('admin.beasiswa.update', $beasiswa) }}" method="POST">
        @csrf
        @method('PUT')
        @include('admin.beasiswa._form')
    </form>
@endsection