<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AdminBorrowController;
use App\Http\Controllers\AdminCategoryController;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/buku', [BukuController::class, 'index']);
Route::post('/buku/{id_kategori}', [BukuController::class, 'searchByCategory']);
Route::get('/buku/search', [BukuController::class, 'searchBuku'])->name('search');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->middleware('auth');
Route::post('/peminjaman', [PeminjamanController::class, 'store'])->middleware('auth');

Route::get('/admin', function() {
    return view('admin/index');
})->middleware('admin');

Route::get('/admin/user', [AdminUserController::class, 'index'])->middleware('admin');
Route::get('/admin/kategori', [AdminCategoryController::class, 'index'])->middleware('admin');
Route::resource('/admin/peminjaman', AdminBorrowController::class)->middleware('admin');
Route::resource('/admin/buku', AdminBookController::class)->middleware('admin')->middleware('admin');

Route::get('syarat', function () {
    return view('syarat');
});
