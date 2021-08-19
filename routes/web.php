<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

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

Route::get('/', [UserController::class, 'index']);

Route::get('/tambah', [UserController::class, 'tambahView']);
Route::post('/tambah', [UserController::class, 'tambah']);
Route::get('/edit/{id}', [UserController::class, 'editView']);
Route::post('/edit/{id}', [UserController::class, 'edit']);
Route::get('/hapus/{id}', [UserController::class, 'delete']);
