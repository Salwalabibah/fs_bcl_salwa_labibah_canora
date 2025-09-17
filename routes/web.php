<?php

use App\Http\Controllers\ArmadaController;
use App\Http\Controllers\PemesananArmadaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/armada', ArmadaController::class)->except(['show']);
Route::resource('/pemesanan-armada', PemesananArmadaController::class)->except(['show']);
