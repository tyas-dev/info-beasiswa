<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute; // <-- PENTING: Import class Attribute
use Carbon\Carbon; // <-- PENTING: Import class Carbon untuk manajemen tanggal

class Beasiswa extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 'status' dihapus dari sini karena sudah tidak ada di tabel database.
     */
   protected $fillable = [
    'nama_beasiswa',
    'penyelenggara',
    'deskripsi',
    'syarat', // <-- TAMBAHKAN INI
    'gambar_url',
    'jenjang',
    'tanggal_buka',
    'tanggal_tutup',
    'link_pendaftaran',
];

    /**
     * == BAGIAN AJAIB DIMULAI DI SINI ==
     * Accessor untuk menentukan atribut 'status' secara dinamis.
     * Method ini akan dipanggil otomatis setiap kali kita mengakses $beasiswa->status di kode kita.
     */
    protected function status(): Attribute
    {
        return new Attribute(
            // Logika 'get' dijalankan saat kita mengambil nilai
            get: function () {
                // Cek: Apakah tanggal hari ini SUDAH MELEWATI tanggal tutup beasiswa?
                if (Carbon::now()->gt($this->tanggal_tutup)) {
                    return 'Tutup'; // Jika ya, statusnya "Tutup"
                }
                return 'Buka'; // Jika tidak, statusnya "Buka"
            },
        );
    }
}