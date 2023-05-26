<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\LaguController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SessionController;
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

// Route::get('/sesi/register', function () {
//     return view('session.register');
// });

// Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'detail']);

Route::resource('mahasiswa', MahasiswaController::class)->middleware('isLogin');

Route::resource('lagu', LaguController::class)->middleware('isLogin');

Route::get('/home', [HalamanController::class, 'index'])->middleware('isLogin');
Route::get('/utama', [HalamanController::class, 'utama'])->middleware('isLogin');
Route::get('/tentang', [HalamanController::class, 'tentang'])->middleware('isLogin');
Route::get('/kontak', [HalamanController::class, 'kontak'])->middleware('isLogin');

Route::get('/', [SessionController::class,'index'])->middleware('isTamu');
Route::post('/sesi/login', [SessionController::class,'login'])->middleware('isTamu');
Route::get('/sesi/register', [SessionController::class,'register'])->middleware('isTamu');
Route::post('/sesi/create', [SessionController::class,'create'])->middleware('isTamu');
Route::get('/sesi/logout', [SessionController::class,'logout']);
