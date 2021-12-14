<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendapatanController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/tugas4', function () {
    return view('polindrome_js');
});

Route::get('/praktikum2', function () {
    return view('form-validation');
});

Route::get('/uts',[TugasController::class,'index']);

Route::get('/tugas-php',[TugasController::class,'tugas_php']);

Route::get('/tugas-php2',[TugasController::class,'tugas_php2']);

Route::get('/pegawai',[PegawaiController::class,'index']);

Route::get('/pegawai/tambah',[PegawaiController::class,'tambah']);

Route::post('/pegawai/store',[PegawaiController::class,'store']);

Route::get('/pegawai/edit/{id}',[PegawaiController::class,'edit']);

Route::post('/pegawai/update',[PegawaiController::class,'update']);

Route::get('/pegawai/hapus/{id}',[PegawaiController::class,'hapus']);
// Route::get('/home', function () {
//     return view('home');
// });

Route::get('pendapatan',[PendapatanController::class,'index']);

Route::get('pendapatan/tambah',[PendapatanController::class,'tambah']);

Route::post('pendapatan/store',[PendapatanController::class,'store']);

Route::get('pendapatan/edit/{id_pegawai}',[PendapatanController::class,'edit']);

Route::post('pendapatan/update',[PendapatanController::class,'update']);

Route::get('pendapatan/hapus/{id_pegawai}',[PendapatanController::class,'delete']);

Route::get('/absen',[AbsenController::class,'index']);  
Route::get('/absen/tambah',[AbsenController::class,'tambah']);
Route::post('/absen/store',[AbsenController::class,'store']);
Route::get('/absen/edit/{id}',[AbsenController::class,'edit']);
Route::post('/absen/update',[AbsenController::class,'update']);
Route::get('/absen/hapus/{id}',[AbsenController::class,'hapus']);

Route::get('/minuman',[MinumanController::class,'index']);  
Route::get('/minuman/tambah',[MinumanController::class,'tambah']);
Route::post('/minuman/store',[MinumanController::class,'store']);
Route::get('/minuman/edit/{kodeminuman}',[MinumanController::class,'edit']);
Route::post('/minuman/update',[MinumanController::class,'update']);
Route::get('/minuman/hapus/{kodeminuman}',[MinumanController::class,'hapus']);

Route::get('/minuman/cari',[MinumanController::class,'cari']);
Route::get('/minuman/detail/{kodeminuman}',[MinumanController::class,'detail']);  