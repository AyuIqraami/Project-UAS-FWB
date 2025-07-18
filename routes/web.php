<?php

use App\app\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\GuideController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Guide\GuideDashboard;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WisatawanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [LandingPageController::class, 'landing'])->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::get('/profil', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profil', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profil', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/admin', [AdminDashboard::class, 'index'])->name('dashboard.admin');
    Route::get('/dashboard/guide', [GuideDashboard::class, 'index'])->name('dashboard.guide');
    Route::get('/dashboard/wisatawan', [WisatawanController::class, 'index'])->name('dashboard.wisatawan');
});

Route::middleware(['auth'])->prefix('wisatawan')->name('wisatawan.')->group(function () {
    Route::get('/booking/create/{guide}', [BookingController::class, 'create'])->name('booking.create');
    Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
});

Route::middleware(['auth', 'role:Admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
    Route::get('/destinasi', [DestinationController::class, 'index'])->name('destinasi.index');
    Route::get('/destinasi/create', [DestinationController::class, 'create'])->name('destinasi.create');
    Route::post('/destinasi', [DestinationController::class, 'store'])->name('destinasi.store');
    Route::get('/destinasi/{id}/edit', [DestinationController::class, 'edit'])->name('destinasi.edit');
    Route::put('/destinasi/{id}', [DestinationController::class, 'update'])->name('destinasi.update');
    Route::delete('/destinasi/{id}', [DestinationController::class, 'destroy'])->name('destinasi.destroy');
    Route::get('/guide', [GuideController::class, 'index'])->name('guide.index');
    Route::get('/guide/create', [GuideController::class, 'create'])->name('guide.create');
    Route::post('/guide', [GuideController::class, 'store'])->name('guide.store');
    Route::get('/guide/{id}/edit', [GuideController::class, 'edit'])->name('guide.edit');
    Route::put('/guide/{id}', [GuideController::class, 'update'])->name('guide.update');
    Route::delete('/guide/{id}', [GuideController::class, 'destroy'])->name('guide.destroy');
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user', [UserController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/review', [ReviewController::class, 'index'])->name('review.index');
    Route::get('/review/create', [ReviewController::class, 'create'])->name('review.create');
    Route::post('/review', [ReviewController::class, 'store'])->name('review.store');
    Route::get('/review/{id}/edit', [ReviewController::class, 'edit'])->name('review.edit');
    Route::put('/review/{id}', [ReviewController::class, 'update'])->name('review.update');
    Route::delete('/review/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');
});

Route::middleware(['auth'])->prefix('wisatawan')->name('wisatawan.')->group(function () {
    Route::get('/dashboard-wisatawan', [DestinationController::class, 'dashboard'])->name('dashboardWisatawan');
    Route::get('/destinasi', [DestinationController::class, 'destinasi'])->name('destinasi');
    Route::get('/guide', [DestinationController::class, 'guide'])->name('guide');
    Route::get('/bookings', [DestinationController::class, 'bookings'])->name('bookings');
    Route::get('/booking/create/{destination}', [BookingController::class, 'create'])->name('booking.create');
    Route::get('/review', [DestinationController::class, 'review'])->name('review');
    Route::get('/profil/edit', [ProfileController::class, 'edit'])->name('profile.edit');
});