<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;

// Halaman utama
Route::get('/', [WelcomeController::class, 'index']);

// Route untuk User dengan Datatable
Route::get('/user', [UserController::class, 'index']);
Route::post('/user/list', [UserController::class, 'list']); // Untuk datatable
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/user/{id}/edit', [UserController::class, 'edit']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);

// Route lain
Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
