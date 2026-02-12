<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MahasiswaController;
Route::resource('mahasiswa', MahasiswaController::class);

use App\Http\Controllers\MatakuliahController;
Route::resource('matakuliah', MatakuliahController::class);