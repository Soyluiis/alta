<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\IngresarFolioController;




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



Route::get('/ingresar-folio', [App\Http\Controllers\IngresarFolioController::class, 'showIngresoForm'])->name('ingresar-folio');
Route::post('/ingresar-folio', [App\Http\Controllers\IngresarFolioController::class, 'ingresarFolio'])->name('ingresar-folio');





Route::get('/alta-folio', [App\Http\Controllers\IngresarFolioController::class, 'showAltaForm'])->name('alta.folio.form');
Route::post('/alta-folio', [App\Http\Controllers\IngresarFolioController::class, 'altaFolio'])->name('alta.folio');
/* Route::post('/alta-folio/auto', [App\Http\Controllers\IngresarFolioController::class, 'generateAutomaticFolio'])->name('alta.folio.auto');
 */


Route::middleware(['auth', CheckRole::class])->group(function () {
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users');
Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'indes'])->name('indes');
Route::post('users/{userId}/assign-role', [UserController::class, 'assignRole'])->name('users.assign-role');
Route::get('/usuarios-con-folio', [App\Http\Controllers\UserController::class, 'usuariosConFolio'])->name('usuarios.con-folio.index');
Route::delete('/usuarios/{id}',  [App\Http\Controllers\UserController::class, 'destroyfolio'])->name('usuarios.destroy');
Route::get('/usuarios/{id}', [App\Http\Controllers\UserController::class, 'ushow'])->name('ushow');
Route::get('/usuarios/{id}/edit', [App\Http\Controllers\UserController::class, 'uedit'])->name('uedit');
Route::put('/usuarios/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');


});

Route::get('/carga', [App\Http\Controllers\AgenciaCargaController::class, 'create'])->name('carga');
Route::post('/cargas', [App\Http\Controllers\AgenciaCargaController::class, 'store'])->name('cargas.store');
Route::get('/cargas', [App\Http\Controllers\AgenciaCargaController::class, 'index'])->name('vista');
Route::get('/cargas/{ver}', [App\Http\Controllers\AgenciaCargaController::class, 'show'])->name('show');
Route::get('/cargas/{ver}/edit', [App\Http\Controllers\AgenciaCargaController::class, 'edit'])->name('edit');
Route::put('/cargas/{ver}', [App\Http\Controllers\AgenciaCargaController::class, 'update'])->name('cargas.update');
Route::delete('/cargas/{ver}', [App\Http\Controllers\AgenciaCargaController::class, 'destroy'])->name('cargas.destroy');







