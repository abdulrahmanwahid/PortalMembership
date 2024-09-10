<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TabunganQurban;
use Illuminate\Http\Request;

class TabunganQurbanController extends Controller
{

    public function index()
    {

        $data['tabungan'] = TabunganQurban::all();
        return view('tabungan-qurban.index',$data);
    }
}
