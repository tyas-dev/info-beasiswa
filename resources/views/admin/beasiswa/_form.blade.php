{{-- Tampilkan Error Validasi --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-3">
    <label for="nama_beasiswa" class="form-label">Nama Beasiswa</label>
    <input type="text" class="form-control" id="nama_beasiswa" name="nama_beasiswa" value="{{ old('nama_beasiswa', $beasiswa->nama_beasiswa ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="penyelenggara" class="form-label">Penyelenggara</label>
    <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" value="{{ old('penyelenggara', $beasiswa->penyelenggara ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="gambar_url" class="form-label">URL Gambar</label>
    <input type="url" class="form-control" id="gambar_url" name="gambar_url" value="{{ old('gambar_url', $beasiswa->gambar_url ?? '') }}" required>
</div>
<div class="mb-3">
    <label for="deskripsi" class="form-label">Deskripsi</label>
    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ old('deskripsi', $beasiswa->deskripsi ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="syarat" class="form-label">Syarat-syarat (pisahkan dengan baris baru)</label>
    <textarea class="form-control" id="syarat" name="syarat" rows="5" required>{{ old('syarat', $beasiswa->syarat ?? '') }}</textarea>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="jenjang" class="form-label">Jenjang</label>
        <select class="form-select" id="jenjang" name="jenjang" required>
            <option value="">Pilih Jenjang</option>
            @foreach(['SMA/SMK', 'D3', 'S1', 'S2', 'S3'] as $jenjang)
                <option value="{{ $jenjang }}" @selected(old('jenjang', $beasiswa->jenjang ?? '') == $jenjang)>{{ $jenjang }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6 mb-3">
        <label for="link_pendaftaran" class="form-label">Link Pendaftaran (Opsional)</label>
        <input type="url" class="form-control" id="link_pendaftaran" name="link_pendaftaran" value="{{ old('link_pendaftaran', $beasiswa->link_pendaftaran ?? '') }}">
    </div>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="tanggal_buka" class="form-label">Tanggal Buka</label>
        <input type="date" class="form-control" id="tanggal_buka" name="tanggal_buka" value="{{ old('tanggal_buka', isset($beasiswa->tanggal_buka) ? Carbon\Carbon::parse($beasiswa->tanggal_buka)->format('Y-m-d') : '') }}" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="tanggal_tutup" class="form-label">Tanggal Tutup</label>
        <input type="date" class="form-control" id="tanggal_tutup" name="tanggal_tutup" value="{{ old('tanggal_tutup', isset($beasiswa->tanggal_tutup) ? Carbon\Carbon::parse($beasiswa->tanggal_tutup)->format('Y-m-d') : '') }}" required>
    </div>
</div>
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="{{ route('admin.beasiswa.index') }}" class="btn btn-secondary">Batal</a>