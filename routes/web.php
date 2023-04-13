<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\LeccionController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin/alumno', AlumnoController::class);
Route::resource('admin/materias', MateriaController::class);
Route::resource('admin/profesor', ProfesorController::class);
Route::resource('admin/grupo', GrupoController::class);
Route::resource('admin/leccion', LeccionController::class);

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
   
});

