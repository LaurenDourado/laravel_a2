<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function() { return view('welcome'); })->name('home');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::get('/edit-password', [AuthController::class, 'showEditPassword'])->name('edit.password');
Route::post('/edit-password', [AuthController::class, 'editPassword']);

Route::resource('users', UserController::class);
