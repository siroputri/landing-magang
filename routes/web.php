<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswa;
// use App\Http\Controllers\Dosen;

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
 
Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/mahasiswa', [Mahasiswa::class, 'index']); 
Route::get('/mahasiswa/create', [Mahasiswa::class, 'create']);
Route::post('/mahasiswa/create', [Mahasiswa::class, 'post']);
Route::get('/mahasiswa/edit/{id}', [Mahasiswa::class, 'edit']);
Route::post('/mahasiswa/edit/{id}', [Mahasiswa::class, 'postEdit']);
Route::post('/mahasiswa/delete/{id}', [Mahasiswa::class, 'delete']);

Route::get('/dosen', [Dosen::class, 'index']);
Route::get('/dosen/create', [Dosen::class, 'create']);
Route::post('/dosen/create', [Dosen::class, 'post']);
Route::get('/dosen/edit/{id}', [Dosen::class, 'edit']);
Route::post('/dosen/edit/{id}', [Dosen::class, 'postEdit']);
Route::post('/dosen/delete/{id}', [Dosen::class, 'delete']);

Route::get('/steller', [Mahasiswa::class, 'homepage']);
Route::get('/comment', [Mahasiswa::class, 'index'])->name('comment');