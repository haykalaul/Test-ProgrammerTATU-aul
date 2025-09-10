<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnterController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\KabidController;
use App\Http\Controllers\KadinController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/enter', [EnterController::class, 'index']);
Route::post('/enter', [EnterController::class, 'store'])->name('enter.store');
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');
Route::get('/tambah', [StaffController::class, 'tambah'])->name('staff.tambah');
Route::post('/staff/store', [StaffController::class, 'store'])->name('staff.store');
Route::delete('/staff/delete/{id}', [StaffController::class, 'delete'])->name('staff.delete');
Route::get('/kabid', [KabidController::class, 'index'])->name('kabid.index');
Route::get('/kabid/edit/{id}', [KabidController::class, 'edit'])->name('kabid.edit');
Route::put('/kabid/update/{id}', [KabidController::class, 'update'])->name('kabid.update');
Route::get('/kadin', [KadinController::class, 'index'])->name('kadin.index');
