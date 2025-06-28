<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('beasiswas', function (Blueprint $table) {
        $table->id();
        $table->string('nama_beasiswa', 255);
        $table->string('penyelenggara', 150);
        $table->text('deskripsi');
        $table->text('gambar_url'); // Untuk menyimpan link gambar dari internet
        $table->enum('jenjang', ['SMA/SMK', 'D3', 'S1', 'S2', 'S3']);
        $table->date('tanggal_buka');
        $table->date('tanggal_tutup');
        $table->string('link_pendaftaran')->nullable();
    
        $table->timestamps(); // Otomatis membuat created_at dan updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beasiswas');
    }
};
