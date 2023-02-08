<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Admin
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DtUserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\KelasController;

// Users
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BukuSiswaController;
use App\Http\Controllers\BookingSiswaController;
use App\Http\Controllers\CatalogSiswaController;

// Pengawas
use App\Http\Controllers\PengawasController;
use App\Http\Controllers\BookPengawasController;
use App\Http\Controllers\BookingPengawasController;

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


Route::middleware(['auth', 'admin', 'revalidate'])->group(function () {

    // Admin
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    
    // CRUD Catalog
    Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');
    Route::get('/cari-catalog-admin', [CatalogController::class, 'search'])->name('search-catalog-admin');

    // CRUD Book
    Route::get('/book', [BookController::class, 'index'])->name('book');
    Route::get('/tambah-book', [BookController::class, 'create'])->name('tambah-book');
    Route::post('/simpan-book', [BookController::class, 'store'])->name('simpan-book');
    Route::get('/edit-book/{id}', [BookController::class, 'edit'])->name('edit-book');
    Route::post('/update-book/{id}', [BookController::class, 'update'])->name('update-book');
    Route::get('/hapus-book/{id}', [BookController::class, 'destroy'])->name('hapus-book');
    Route::get('/cari-buku-admin', [BookController::class, 'search'])->name('search-book-admin');

    // CRUD User
    Route::get('/user', [DtUserController::class, 'index'])->name('user');
    Route::get('/tambah-user', [DtUserController::class, 'create'])->name('tambah-user');
    Route::post('/simpan-user', [DtUserController::class, 'store'])->name('simpan-user');
    Route::get('/edit-user/{id}', [DtUserController::class, 'edit'])->name('edit-user');
    Route::post('/update-user/{id}', [DtUserController::class, 'update'])->name('update-user');
    Route::get('/hapus-user/{id}', [DtUserController::class, 'destroy'])->name('hapus-user');
    Route::get('/cari-user-admin', [DtUserController::class, 'search'])->name('search-user-admin');

    // CRUD Booking
    Route::get('/booking', [BookingController::class, 'index'])->name('booking');
    Route::get('/edit-booking/{id}', [BookingController::class, 'edit'])->name('edit-booking');
    Route::post('/update-booking/{id}', [BookingController::class, 'update'])->name('update-booking');
    Route::get('/cari-booking-admin', [BookingController::class, 'search'])->name('search-booking-admin');

    // CRUD Kelas
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
    Route::get('/tambah-kelas', [KelasController::class, 'create'])->name('tambah-kelas');
    Route::post('/simpan-kelas', [KelasController::class, 'store'])->name('simpan-kelas');
    Route::get('/edit-kelas/{id}', [KelasController::class, 'edit'])->name('edit-kelas');
    Route::post('/update-kelas/{id}', [KelasController::class, 'update'])->name('update-kelas');
    Route::get('/hapus-kelas/{id}', [KelasController::class, 'destroy'])->name('hapus-kelas');
    Route::get('/cari-kelas-admin', [KelasController::class, 'search'])->name('search-kelas-admin');

});


Route::middleware(['auth', 'guru', 'revalidate'])->group(function () {

    // Pengawas
    Route::get('/pengawas', [PengawasController::class, 'index'])->name('pengawas');

    // Pengawas Book
    Route::get('/book-pengawas', [BookPengawasController::class, 'index'])->name('book-pengawas');
    Route::get('/cari-buku-pengawas', [BookPengawasController::class, 'search'])->name('search-book-pengawas');
    Route::get('/book/export/', [BookPengawasController::class, 'export'])->name('export-book-pengawas');

    // Pengawas Booking
    Route::get('/booking-pengawas', [BookingPengawasController::class, 'index'])->name('booking-pengawas');
    Route::get('/cari-booking-pengawas', [BookingPengawasController::class, 'search'])->name('search-booking-pengawas');
    Route::get('/booking/export/', [BookingPengawasController::class, 'export'])->name('export-booking-pengawas');

});


Route::middleware(['auth', 'siswa', 'revalidate'])->group(function () {
    
    // Siswa Dashboard
    //Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
    Route::get('/detail/{slug}', [SiswaController::class, 'detail']);

    // Siswa Book
    Route::get('/buku', [BukuSiswaController::class, 'index'])->name('buku');
    Route::get('/cari-buku', [BukuSiswaController::class, 'search'])->name('search');
    Route::get('/view-book', [BukuSiswaController::class, 'viewBook'])->name('view-book');

    // Siswa Booking
    Route::get('/booking-siswa', [BookingSiswaController::class, 'index'])->name('booking-siswa');
    Route::post('/tambah-booking/{id}', [BookingSiswaController::class, 'bookingAdd'])->name('tambah-booking');
    Route::get('/edit-booking-siswa/{id}', [BookingSiswaController::class, 'edit'])->name('edit-booking-siswa');
    Route::post('/update-booking-siswa/{id}', [BookingSiswaController::class, 'update'])->name('update-booking-siswa');
    Route::get('/cari-booking-siswa', [BookingSiswaController::class, 'search'])->name('search-booking-siswa');

    // Siswa Catalog
    Route::get('/catalog-siswa', [CatalogSiswaController::class, 'index'])->name('catalog-siswa');
    Route::get('/cari-catalog-siswa', [CatalogSiswaController::class, 'search'])->name('search-catalog-siswa');

});

