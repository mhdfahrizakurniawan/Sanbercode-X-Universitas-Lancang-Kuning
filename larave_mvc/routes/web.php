<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

//Tugas sabelumnya

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/form', [HomeController::class, 'index'])->name('index');
// Route::post('/home', [AuthController::class, 'proses'])->name('home.post');
// Route::get('/home', [AuthController::class, 'tampil'])->name('home');

//Tugas laravel-template

Route::get('/', function () {
         return view('layout.master');
     });
    
Route::get('/dashboard', [UserController::class, 'index']);

Route::get('/tabel', [UserController::class, 'tabels']);

Route::get('/data-tabel', [UserController::class, 'data']);