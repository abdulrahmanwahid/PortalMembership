<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Simpanan;
use Illuminate\Http\Request;

class SimpananController extends Controller
{
    //
    public function index()
    {

        $data['simpanan'] = Simpanan::all();
        return view('simpanan.index',$data);
    }
}
