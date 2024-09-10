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
        $data['total_Simpanan'] = Simpanan::sum('awal_angsuran');
        $data['total_Pinjaman'] = Pinjaman::sum('nominal_disetujui');
        $data['total_Tabungan'] = TabunganQurban::sum('nominal');
        $data['total_Transaksi'] = Transaksi::sum('nominal');

        $data['transaksi'] = Transaksi::all();
        $data['pinjaman'] = Pinjaman::all();
        $data['simpanan'] = Simpanan::all();
        $data['tabungan'] = TabunganQurban::all();
        return view('home', $data);
    }
}
