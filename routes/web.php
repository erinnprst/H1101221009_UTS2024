<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasterjabatanController;
use App\Http\Controllers\PendidikanController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/masterjabatan', [MasterjabatanController::class, 'index']);

Route::get('/pendidikan', [PendidikanController::class, 'index']);