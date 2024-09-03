<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    // Menampilkan daftar membership
    public function index()
    {
        $memberships = Membership::all(); // Mengambil semua data membership
        return view('membership.index', compact('memberships')); // Mengirim data membership ke view
    }


    // public function edit($id)
    // {
    //     $membership = Membership::findOrFail($id);
    //     return view('membership.edit', compact('membership')); 
    // }


    // public function update(Request $request, $id)
    // {
    //     $membership = Membership::findOrFail($id);

    //     $request->validate([
    //         'nama' => 'required|string|max:255',
    //         'perusahaan' => 'required|string|max:255', 
    //         'nik' => 'required|string|max:255', 
    //         'npsn' => 'required|string|max:255', 
    //         'telp' => 'required|string|max:255', 
    //         'email' => 'required|email|max:255',
    //         'nrp' => 'required|string|max:255', 
    //         'kode_divisi' => 'required|string|max:255', 
    //         'tempat_lahir' => 'required|string|max:255', 
    //         'jenis_kelamin' => 'required|string|max:255', 
    //         'status' => 'required|string|max:255', 
    //         'no_darurat' => 'required|string|max:255', 
    //         'golongan' => 'required|string|max:255', 
    //         'nama_rek' => 'required|string|max:255', 
    //         'no_rek' => 'required|string|max:255', 
    //         'bank' => 'required|string|max:255', 
    //     ]);

    //     $membership->update($request->all());

    //     return redirect()->route('membership.index')->with('success', 'Membership berhasil diperbarui!');
    // }
}
