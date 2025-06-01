<?php

use App\Http\Controllers\GuideController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth', 'role:Guide'])->group(function () {
//     Route::get('/guide/dashboard', [GuideController::class, 'index'])->name('guide.dashboard');
//     // ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ PASTIKAN BARIS INI ADA DAN NAMANYA BENAR
// });

Route::get('/dashboard', function () {
    return view('Guide.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:Guide'])->group(function () {
    Route::get('/guide/dashboard', [GuideController::class, 'index'])->name('guide.dashboard');
});

require __DIR__.'/auth.php';
