<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pinjaman;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
     public function index()
    {

        $data['pinjaman'] = Pinjaman::all();
        return view('pinjaman.index',$data);
    }
}
