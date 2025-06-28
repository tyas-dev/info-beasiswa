@extends('layouts.public')

@section('title', 'Beranda - Temukan Beasiswa Impianmu')

@section('content')
    <div class="container-fluid bg-white text-dark text-center py-5">
        <div class="container">
            <h1 class="display-4 fw-bold">Temukan Peluang Emasmu</h1>
            <p class="lead col-md-8 mx-auto text-muted">Platform terpercaya untuk menemukan informasi beasiswa S1, S2, dan S3 dari berbagai institusi ternama.</p>
        <div class="mt-4 search-form">
         <form action="{{ route('home') }}" method="GET">
        <div class="input-group input-group-lg shadow-sm">
            <input type="text" class="form-control" name="search" placeholder="Cari nama beasiswa atau penyelenggara..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
        </div>
    </form>
</div>
        </div>  
    </div>

    <div class="container my-5">
        <h2 class="text-center mb-5 fw-bold">Beasiswa yang Sedang Dibuka</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @forelse ($beasiswas as $beasiswa)
            <div class="col">
                <a href="{{ route('beasiswa.show', $beasiswa) }}" class="card scholarship-card h-100 shadow-sm">
                    <img src="{{ $beasiswa->gambar_url }}" class="card-img-top" alt="Gambar {{ $beasiswa->nama_beasiswa }}">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-primary align-self-start mb-2">{{ $beasiswa->jenjang }}</span>
                        <h5 class="card-title fw-bold text-dark">{{ $beasiswa->nama_beasiswa }}</h5>
                        <p class="card-text text-muted small mt-1">{{ $beasiswa->penyelenggara }}</p>
                        <div class="mt-auto pt-3">
                            <p class="text-danger small fw-bold mb-0">
                                <i class="bi bi-calendar-x"></i>
                                Tenggat: {{ \Carbon\Carbon::parse($beasiswa->tanggal_tutup)->isoFormat('D MMMM YYYY') }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">Saat ini belum ada beasiswa yang tersedia.</div>
            </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center mt-5">{{ $beasiswas->links() }}</div>
    </div>
@endsection