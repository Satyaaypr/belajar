<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BelajarController;

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
// route view
Route::get('/index', [BelajarController::class, 'index']);
Route::get('/index/barang', [BelajarController::class, 'barang']);
Route::get('/index/transaksi', [BelajarController::class, 'transaksi']);
Route::get('/index/kelas', [BelajarController::class, 'p_siswa']);


// route ambil data database
Route::get('/index/barang', [BelajarController::class, 'v_barang']);

//route input data
Route::view('/barang/tambah', [BelajarController::class,'peminjaman.v_tambah']);
Route::post('/barang/tambah', [BelajarController::class, 'v_tambah']);
 
 // route hapus data
Route::get('/barang', [BelajarController::class, 'v_barang']);
Route::get('/barang/delete/{id}',[BelajarController::class, 'delete']);

//Route edit data
Route::get('/barang/edit/{id}', [BelajarController::class, 'v_edit']);
Route::post('/barang/edit/', [BelajarController::class, 'update']);


//---------------------------------------------------------------------
//=====================================================================
//Route Search
//Route::get('/index/barang', [BelajarController::class, 'v_barang']);
//Route::get('/barang/cari', [BelajarController::class, 'cari']);

Route::get('/index/kelas', [BelajarController::class, 'p_siswa']);
Route::get('/index/kelas', [BelajarController::class, 'd_siswa']);