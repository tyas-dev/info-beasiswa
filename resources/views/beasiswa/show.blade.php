@extends('layouts.public')

@section('title', $beasiswa->nama_beasiswa)

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="bg-white p-4 p-md-5 rounded-3 shadow-sm">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Beasiswa</li>
                    </ol>
                </nav>
                <hr>
                <h1 class="fw-bold display-6 mb-3">{{ $beasiswa->nama_beasiswa }}</h1>
                <div class="d-flex align-items-center mb-4">
                    <span class="text-muted"><i class="bi bi-building"></i> {{ $beasiswa->penyelenggara }}</span>
                    <span class="mx-2 text-muted">|</span>
                    <span class="badge {{ $beasiswa->status == 'Buka' ? 'bg-success' : 'bg-danger' }}">{{ $beasiswa->status }}</span>
                </div>
                <h4 class="fw-bold mt-5">Deskripsi</h4>
                <p class="text-muted" style="white-space: pre-wrap;">{{ $beasiswa->deskripsi }}</p>
                {{-- ================= BAGIAN PERSYARATAN ================= --}}
                @if($beasiswa->syarat)
                <h4 class="fw-bold mt-5">Persyaratan</h4>
                <div class="text-muted">
                    {!! nl2br(e($beasiswa->syarat)) !!}
                </div>
                @endif
{{-- ======================================================= --}}
            </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="sticky-top" style="top: 100px;">
                <div class="bg-white p-4 rounded-3 shadow-sm">
                    <img src="{{ $beasiswa->gambar_url }}" class="img-fluid rounded-3 mb-4" alt="Gambar {{ $beasiswa->nama_beasiswa }}">
                    <h5 class="fw-bold mb-3">Informasi Penting</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2 d-flex"><i class="bi bi-mortarboard-fill me-3 text-primary fs-5"></i><div><span class="fw-bold d-block">Jenjang</span><span class="text-muted">{{ $beasiswa->jenjang }}</span></div></li>
                        <li class="mb-2 d-flex"><i class="bi bi-calendar-event-fill me-3 text-primary fs-5"></i><div><span class="fw-bold d-block">Pendaftaran Dibuka</span><span class="text-muted">{{ \Carbon\Carbon::parse($beasiswa->tanggal_buka)->isoFormat('D MMMM YYYY') }}</span></div></li>
                        <li class="mb-3 d-flex"><i class="bi bi-calendar-x-fill me-3 text-danger fs-5"></i><div><span class="fw-bold d-block">Pendaftaran Ditutup</span><span class="text-muted">{{ \Carbon\Carbon::parse($beasiswa->tanggal_tutup)->isoFormat('D MMMM YYYY') }}</span></div></li>
                    </ul>
                   @if($beasiswa->status == 'Buka')
                        @if($beasiswa->link_pendaftaran)
                            {{-- Jika status Buka DAN link tersedia, tampilkan tombol biru yang aktif --}}
                            <a href="{{ $beasiswa->link_pendaftaran }}" class="btn btn-primary btn-lg w-100" target="_blank">
                                Daftar Sekarang <i class="bi bi-box-arrow-up-right ms-2"></i>
                            </a>
                        @else
                            {{-- Jika status Buka TAPI link belum ada, tampilkan tombol abu-abu --}}
                            <button class="btn btn-info btn-lg w-100" disabled>
                                <i class="bi bi-info-circle-fill me-2"></i> Link Belum Tersedia
                            </button>
                        @endif
                    @else
                        {{-- Jika status Tutup, tampilkan tombol abu-abu --}}
                        <button class="btn btn-secondary btn-lg w-100" disabled>Pendaftaran Ditutup</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection