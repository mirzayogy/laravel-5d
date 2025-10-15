<?php

use App\Http\Controllers\MatakuliahController;
use App\Models\Matakuliah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/matakuliah', [MatakuliahController::class, 'index']);
Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show']);


Route::get('/coba', function() {
    return view('welcome');
});

Route::get('/copy', function () {
    return view('copy');
});
