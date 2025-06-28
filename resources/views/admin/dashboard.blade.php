@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
    </div>
    <h4>Selamat Datang, {{ Auth::user()->name }}!</h4>
    <p>Anda telah berhasil masuk ke Panel Admin. Silakan gunakan menu di sidebar untuk mengelola konten.</p>
@endsection