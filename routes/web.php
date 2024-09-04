<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\TabunganQurbanController;


Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index');
});
Route::get('/edit', function () {
    return view('editmember.index');
});


Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::post('/login', [LoginController::class, 'login'])->name('login');

//membership
Route::get('/member', [MembershipController::class, 'index'])->name('membership.index');
Route::get('/editmember', [MembershipController::class, 'edit'])->name('membership.edit');


Route::get('tabungan-qurban',[TabunganQurbanController::class, 'index'])->name('tabungan.index');
Route::get('simpanan',[TabunganQurbanController::class, 'index'])->name('simpanan.index');
Route::get('pinjaman',[TabunganQurbanController::class, 'index'])->name('pinjaman.index');
