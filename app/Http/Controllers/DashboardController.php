<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use App\Models\Simpanan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\TabunganQurban;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index()
    {
        $data['transaksi'] = Transaksi::all();
        $data['pinjaman'] = Pinjaman::all();
        $data['simpanan'] = Simpanan::all();
        $data['tabungan'] = TabunganQurban::all();
        return view('home', $data);
    }
}
