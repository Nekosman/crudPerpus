<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('student', [StudentController::class, 'pplg1'])->name('pplg1.student');

Route::prefix('pplg3')->group(function () {
    Route::get('student', [StudentController::class, 'pplg3'])->name('pplg3.student');

});

// Route untuk Kategori
Route::resource('kategori', KategoriController::class);

// Route untuk Buku
Route::resource('buku', BukuController::class);
