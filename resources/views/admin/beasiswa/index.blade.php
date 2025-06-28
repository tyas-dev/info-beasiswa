@extends('layouts.admin')

@section('title', 'Kelola Beasiswa')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Beasiswa</h1>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="mb-3">
        <a href="{{ route('admin.beasiswa.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Beasiswa Baru
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Nama Beasiswa</th>
                    <th scope="col">Penyelenggara</th>
                    <th scope="col">Jenjang</th>
                    <th scope="col">Tenggat</th>
                    <th scope="col" style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($beasiswas as $beasiswa)
                <tr>
                    <td>{{ $beasiswa->nama_beasiswa }}</td>
                    <td>{{ $beasiswa->penyelenggara }}</td>
                    <td>{{ $beasiswa->jenjang }}</td>
                    <td>{{ \Carbon\Carbon::parse($beasiswa->tanggal_tutup)->isoFormat('D MMMM YYYY') }}</td>
                    <td>
                        <a href="{{ route('admin.beasiswa.edit', $beasiswa) }}" class="btn btn-sm btn-warning">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <form action="{{ route('admin.beasiswa.destroy', $beasiswa) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus beasiswa ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash3"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data beasiswa.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $beasiswas->links() }}
@endsection