<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;

Route::get('/', function () {
    return redirect()->route('dispositivos.index');
});
Route::resource('dispositivos', DispositivoController::class);

// Rotas de Registro de Usuário
Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

// Rotas de Login e Logout
Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [loginController::class, 'login'])->name('login.post');
Route::post('/logout', [loginController::class, 'logout'])->name('logout');
