<?php

use App\Http\Controllers\KibTypeController;
use App\Http\Controllers\KorwilController;
use App\Http\Controllers\DataSekolahController;
use App\Http\Controllers\DetailKibController;
use App\Http\Controllers\SarprasController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\DetailSarprasController;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('pages.home');
});

// Data Sekolah Routes
Route::get('/data-sekolah', [KorwilController::class, 'index'])->name('data-sekolah');
Route::get('/data-sekolah/{korwil}', [KorwilController::class, 'list'])->name('data-sekolah.list');
Route::get('/korwil/{korwil}/sekolah', [DataSekolahController::class, 'index'])->name('korwil.list-sekolah');
Route::get('/korwil/{korwil}/sekolah/{sekolah}', [DataSekolahController::class, 'show'])->name('korwil.sarpras');

// Sekolah Detail Routes
Route::get('/sekolah/{id}', [SekolahController::class, 'show'])->name('sekolah.detail');

// Detail Sarpras Route
Route::get('/sarpras/{sarpras_id}/{jenis_ruang}', [DetailSarprasController::class, 'showByType'])->name('detail-sarpras');

// Data Barang Routes
Route::get('/data-barang', [KibTypeController::class, 'index'])->name('data-barang');
Route::get('/data-barang/{kibType}', [KibTypeController::class, 'show'])->name('data-barang.show');

// KIB Download Route
Route::get('/kib/{kib}/download', [DetailKibController::class, 'downloadExcel'])->name('kib.download');

// Detail KIB Routes
Route::resource('detail-kib', DetailKibController::class);




use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');