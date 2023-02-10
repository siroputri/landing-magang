<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswa;
// use App\Http\Controllers\Dosen;
use App\Http\Controllers\Comment;
use App\Http\Controllers\Author;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/', [Mahasiswa::class, 'homepage']);
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

    // prefix (untuk grup route)
    // line 40-42 masukin route
    Route::prefix('comment')->group(function () {
        Route::get('/', [Comment::class, 'index']);
        Route::post('/', [Comment::class, 'post']);
        Route::post('/delete/{id}', [Comment::class, 'delete']);
    });
});

Route::get('/greeting', function () {
    return 'Hello World';
});

// Only authenticated users may access this route...
// penyimpanan data server di session (cookies)
// middleware = jembatan
// Route::get('/login', function () {})->middleware('auth.basic');
Route::get('/register', [Author::class, 'index']);
Route::post('/register', [Author::class, 'register']);

Route::get('/login', [Author::class, 'loginPage']);
Route::post('/login', [Author::class, 'login']);
Route::get('/logout', [Author::class, 'logout']);
