<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController; // Thêm dòng này

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register'); 
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login'); 
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/booking', [BookingController::class, 'showForm'])->name('booking.form');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
