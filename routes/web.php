<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\PaisController;

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
    return view('welcome');
});

Route::get("usuario/estudiante/{id?}", EstudianteController::class);
Route::get("usuario/profesor/{id?}", ProfesorController::class);

/*
Route::get('paises', [PaisController::class, 'index']);
Route::post('paises', [PaisController::class, 'store']);
Route::get('paises/{pais}', [PaisController::class, 'show']);
Route::put('paises/{pais}', [PaisController::class, 'update']);
Route::delete('paises/{pais}', [PaisController::class, 'destroy']);
*/
Route::resource('paises', PaisController::class)->except(['create', 'edit']);

/*
Route::get('paises/{pais}/departamentos', [DepartamentoController::class, 'index']);
Route::post('paises/{pais}/departamentos', [DepartamentoController::class, 'store']);
Route::get('paises/{pais}/departamentos/{departamento}', [DepartamentoController::class, 'show']);
Route::put('paises/{pais}/departamentos/{departamento}', [DepartamentoController::class, 'update']);
Route::delete('paises/{pais}/departamentos/{departamento}', [DepartamentoController::class, 'destroy']);
*/
Route::resource('paises.departamentos', DepartamentoController::class)->except(['create', 'edit']);