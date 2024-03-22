<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KurssController;

Route::get('/kursi', [KurssController::class, 'index']);

Route::get('/izveidot_kursu', [KurssController::class, 'store']);