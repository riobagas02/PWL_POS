<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/level', [LevelController::class,'index']);
Route::get('/kategori', [KategoriController::class,'index']);
Route::get('/user', [UserController::class,'index']);
// Get
Route::get('/user/tambah', [UserController::class,'tambah']);
// Post
Route::post('/user/tambah_simpan', [UserController::class,'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class,'ubah']);
// Put
Route::put('/user/ubah_simpan/{id}', [UserController::class,'ubah_simpan']);
// Delete
Route::get('/user/hapus/{id}', [UserController::class,'hapus']);

Route::get('/kategori', [KategoriController::class,'index']);

Route::get('/kategori/create', [KategoriController::class,'create']);
Route::post('/kategori', [KategoriController::class, 'store']);