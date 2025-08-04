<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiswaController::class, 'index']);

Route::get('/siswa/create', [SiswaController::class, 'create']);

Route::post('/siswa/store', [SiswaController::class, 'store']);