<?php

use App\Models\dispositivo;
use Illuminate\Cache\RedisTagSet;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DispositivoController;

Route::get('/', function () {
    return redirect()->route('dispositivos.index');
});

Route::resource('dispositivos', DispositivoController::class);
