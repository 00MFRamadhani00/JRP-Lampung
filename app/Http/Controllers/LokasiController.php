<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        // Logika atau tindakan lainnya untuk menangani halaman Lokasi Instansi

        // Contoh: Mengembalikan view
        return view('location-page', [
            'title' => 'Lokasi Kami',
        ]);
    }
}
