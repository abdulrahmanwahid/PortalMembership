<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        // Mengambil semua data dari tabel transaksi
        $transaksis = Transaksi::all();

        // Mengirim data transaksi ke view
        return view('transaksi.index', compact('transaksis'));
    }
}
