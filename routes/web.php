<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// Home
Route::get('/', fn() => view('welcome'))->name('home');

// Login & Registro
Route::get('/login',    [AuthController::class,'showLogin'])->name('login');
Route::post('/login',   [AuthController::class,'login']);
Route::get('/register', [AuthController::class,'showRegister'])->name('register');
Route::post('/register',[AuthController::class,'register']);

// Dashboard e logout (protegidos)
Route::middleware('auth.session')->group(function () {
    Route::get('/dashboard', [AuthController::class,'dashboard'])->name('dashboard');
    Route::get('/logout',    [AuthController::class,'logout'])->name('logout');
});

// Esqueceu a senha (SEM exigir login)
Route::get('/edit-password',  [AuthController::class,'showEditPassword'])->name('edit.password');
Route::post('/edit-password', [AuthController::class,'editPassword']);

// CRUD de usuários (protegido)
Route::middleware('auth.session')->group(function () {
    Route::resource('users', UserController::class);
});
