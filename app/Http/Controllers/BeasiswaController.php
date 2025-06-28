<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;

class BeasiswaController extends Controller
{
    // Method untuk menampilkan halaman utama (daftar beasiswa)
   public function index(Request $request)
{
    $query = Beasiswa::query();

    // Logika baru: Ambil beasiswa yang tanggal tutupnya LEBIH BESAR ATAU SAMA DENGAN tanggal hari ini.
    $query->where('tanggal_tutup', '>=', now()); // <-- INI PERBAIKANNYA

    // Jika ada input pencarian (dari parameter 'search' di URL)
    if ($request->has('search') && $request->search != '') {
        $searchTerm = $request->search;
        // Lakukan pencarian di kolom 'nama_beasiswa' ATAU 'penyelenggara'
        $query->where(function($q) use ($searchTerm) {
            $q->where('nama_beasiswa', 'like', '%' . $searchTerm . '%')
              ->orWhere('penyelenggara', 'like', '%' . $searchTerm . '%');
        });
    }

    // Ambil data yang sudah diurutkan dari yang terbaru, dan paginasi
    $beasiswas = $query->latest()->paginate(9)
                       ->withQueryString();

    return view('beasiswa.index', compact('beasiswas'));
}

    // Method untuk menampilkan halaman detail beasiswa
    public function show(Beasiswa $beasiswa)
    {
        // Laravel otomatis akan mencari beasiswa berdasarkan ID dari URL
        // Kirim data beasiswa yang ditemukan ke view
        return view('beasiswa.show', compact('beasiswa'));
    }
}