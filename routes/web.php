<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\PinjamanController;
use App\Http\Controllers\SimpananController;
use App\Http\Controllers\TabunganQurbanController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })  ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::controller(DashboardController::class)->group(function () {
    Route::get('/', 'index');
});
Route::get('/edit', function () {
    return view('editmember.index');
});


Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
// Route::post('/login', [LoginController::class, 'login'])->name('login');

//membership
Route::get('/member', [MembershipController::class, 'index'])->name('membership.index');
Route::get('/editmember', [MembershipController::class, 'edit'])->name('membership.edit');


Route::get('tabungan-qurban',[TabunganQurbanController::class, 'index'])->name('tabungan.index');
Route::get('simpanan',[SimpananController::class, 'index'])->name('simpanan.index');
Route::get('pinjaman',[PinjamanController::class, 'index'])->name('pinjaman.index');


require __DIR__.'/auth.php';
