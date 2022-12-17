<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PengawasController;
use App\Http\Controllers\SiswaController;

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

// Login & Regist
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('loginAttempt', [LoginController::class, 'loginAttempt'])->name('loginAttempt');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');

// CRUD Catalog
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('/tambah-catalog', [CatalogController::class, 'create'])->name('tambah-catalog');
Route::post('/simpan-catalog', [CatalogController::class, 'store'])->name('simpan-catalog');
Route::get('/edit-catalog/{id}', [CatalogController::class, 'edit'])->name('edit-catalog');
Route::post('/update-catalog/{id}', [CatalogController::class, 'update'])->name('update-catalog');
Route::get('/hapus-catalog/{id}', [CatalogController::class, 'destroy'])->name('hapus-catalog');

// CRUD Book
Route::get('/book', [BookController::class, 'index'])->name('book');
Route::get('/tambah-book', [BookController::class, 'create'])->name('tambah-book');
Route::post('/simpan-book', [BookController::class, 'store'])->name('simpan-book');
Route::get('/edit-book/{id}', [BookController::class, 'edit'])->name('edit-book');
Route::post('/update-book/{id}', [BookController::class, 'update'])->name('update-book');
Route::get('/hapus-book/{id}', [BookController::class, 'destroy'])->name('hapus-book');



// Pengawas
Route::get('/pengawas', [PengawasController::class, 'index'])->name('pengawas');


// Siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');

