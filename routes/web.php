<?php

use App\Http\Controllers\TugasController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/home', function () {
//     return view('home');
// });

