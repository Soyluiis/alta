<?php

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

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');

Route::get('/users', [App\Http\Controllers\UserController::class, 'indes'])->name('indes');


Route::get('/carga', [App\Http\Controllers\AgenciaCargaController::class, 'create'])->name('carga');
Route::post('/cargas', [App\Http\Controllers\AgenciaCargaController::class, 'store'])->name('cargas.store');
Route::get('/cargas', [App\Http\Controllers\AgenciaCargaController::class, 'index'])->name('vista');


//Route::get('/agencia_carga/create', [AgenciaCargaController::class, 'create'])->name('agencia_carga.create');
//Route::post('/agencia_carga', [AgenciaCargaController::class, 'store'])->name('agencia_carga.store');


