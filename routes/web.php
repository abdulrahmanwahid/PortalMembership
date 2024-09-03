<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MembershipController;

Route::get('/', function () {
    return view('home');
});

Route::get('/edit', function () {
    return view('editmember.index');
});


Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
Route::post('/login', [LoginController::class, 'login'])->name('login');

//membership
Route::get('/member', [MembershipController::class, 'index'])->name('membership.index');
Route::get('/editmember', [MembershipController::class, 'edit'])->name('membership.edit');
