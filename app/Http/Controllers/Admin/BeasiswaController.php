<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Beasiswa;
use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    /**
     * Menampilkan daftar semua beasiswa.
     */
    public function index()
    {
        $beasiswas = Beasiswa::latest()->paginate(10);
        return view('admin.beasiswa.index', compact('beasiswas'));
    }

    /**
     * Menampilkan form untuk membuat beasiswa baru.
     */
    public function create()
    {
        return view('admin.beasiswa.create');
    }

    /**
     * Menyimpan beasiswa baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_beasiswa' => 'required|string|max:255',
            'penyelenggara' => 'required|string|max:255',
            'gambar_url' => 'required|url',
            'deskripsi' => 'required|string',
            'syarat' => 'required|string',
            'jenjang' => 'required|in:SMA/SMK,D3,S1,S2,S3',
            'tanggal_buka' => 'required|date',
            'tanggal_tutup' => 'required|date|after_or_equal:tanggal_buka',
            'link_pendaftaran' => 'nullable|url',
        ]);

        Beasiswa::create($request->all());

        return redirect()->route('admin.beasiswa.index')
                         ->with('success', 'Beasiswa berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit beasiswa.
     */
    public function edit(Beasiswa $beasiswa)
    {
        return view('admin.beasiswa.edit', compact('beasiswa'));
    }

    /**
     * Memperbarui beasiswa yang ada di database.
     */
    public function update(Request $request, Beasiswa $beasiswa)
    {
        $request->validate([
            'nama_beasiswa' => 'required|string|max:255',
            'penyelenggara' => 'required|string|max:255',
            'gambar_url' => 'required|url',
            'deskripsi' => 'required|string',
            'syarat' => 'required|string',
            'jenjang' => 'required|in:SMA/SMK,D3,S1,S2,S3',
            'tanggal_buka' => 'required|date',
            'tanggal_tutup' => 'required|date|after_or_equal:tanggal_buka',
            'link_pendaftaran' => 'nullable|url',
        ]);

        $beasiswa->update($request->all());

        return redirect()->route('admin.beasiswa.index')
                         ->with('success', 'Beasiswa berhasil diperbarui.');
    }

    /**
     * Menghapus beasiswa dari database.
     */
    public function destroy(Beasiswa $beasiswa)
    {
        $beasiswa->delete();

        return redirect()->route('admin.beasiswa.index')
                         ->with('success', 'Beasiswa berhasil dihapus.');
    }
}