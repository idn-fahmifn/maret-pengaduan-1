<?php

use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// routing bagian admin
Route::prefix('admin')->middleware(['auth', 'verified', AdminMiddleware::class])->group(function(){

    // admin dashboard area.
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Routing bagian user
Route::prefix('user')->middleware(['auth', 'verified'])->group(function(){

    // admin dashboard area.
    Route::get('/dashboard', function () {
        return view('user.dashboard');//halaman yang akan ditampilkan
    })->name('dashboard.user');
    
    Route::get('myreport', [LaporanController::class, 'index'])->name('laporan.index'); //index laporan saya
    Route::get('myreport/create', [LaporanController::class, 'create'])->name('laporan.create'); //index laporan saya
    Route::post('laporan', [LaporanController::class, 'store'])->name('laporan.store');


});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
