<?php

namespace App\Http\Controllers\Admin; // Pastikan namespace-nya benar

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Pastikan nama class-nya benar
class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard admin.
     */
    public function index()
    {
        // Method ini akan memuat file view yang ada di resources/views/admin/dashboard.blade.php
        return view('admin.dashboard');
    }
}