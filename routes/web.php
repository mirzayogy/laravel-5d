<?php

use App\Http\Controllers\MatakuliahController;
use App\Models\Matakuliah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/matakuliah', [MatakuliahController::class, 'index']);
// Route::get('/matakuliah/{id}', [MatakuliahController::class, 'show']);
// Route::get('matakuliahtambah', [MatakuliahController::class, 'create'])
//     ->name('matakuliahtambah');

Route::resource('/matakuliah', MatakuliahController::class);
Route::get('report', [MatakuliahController::class, 'report'])->name('matakuliah.report');


Route::get('/coba', function() {
    return view('welcome');
});


Route::get('/dosen', function () {
    return view('dosen.index');
});

Route::get('/copy', function () {
    return view('copy');
});
