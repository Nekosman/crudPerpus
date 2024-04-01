<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// create
Route::post('student/create', [StudentController::class, 'createData']);

// read
Route::get('student/all', [StudentController::class, 'getAll'])->name('getAllStudent');

// update
Route::put('student/update/{id}', [StudentController::class, 'updateData']);

// delete
Route::delete('student/delete/{id}', [StudentController::class, 'destroyData']);
