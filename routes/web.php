<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Mapel\MapelController;

// Route::middleware(['guest'])->group(function() {
//     Route::get('/',[LoginController::class, 'index'])->name('/');
// });

Route::get('/', [AuthController::class, 'index'])->name('/');
Route::get('register', [AuthController::class, 'daftar'])->name('register');
Route::post('register.post', [AuthController::class, 'register'])->name('register.post');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('tambah.data', [HomeController::class, 'tambah'])->name('tambah');
Route::get('edit.data/{id}', [HomeController::class, 'edit'])->name('edit');
Route::post('tambah.save', [HomeController::class, 'save'])->name('save.pengguna');
Route::post('update.data/{id}', [HomeController::class, 'update'])->name('update');
Route::get('hapus.data/{id}', [HomeController::class, 'hapus'])->name('hapus');
Route::get('mapel', [MapelController::class, 'index'])->name('mapel');
Route::get('tambah', [MapelController::class, 'tambah'])->name('tambah');
Route::post('tambah.save', [MapelController::class, 'save'])->name('save.mapel');
Route::get('edit.mapel/{id}', [MapelController::class, 'edit'])->name('edit.mapel');
Route::post('update.mapel/{id}', [MapelController::class, 'update'])->name('update');
Route::get('delete/{id}', [MapelController::class, 'delete'])->name('delete');
