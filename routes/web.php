<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\modules\AreaController;
use App\Http\Controllers\modules\CategoriaController;
use App\Http\Controllers\modules\MarcaController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('modules/areas',[AreaController::class,'index'])->name('area.index');
Route::get('modules/areas/create',[AreaController::class,'create'])->name('area.create');
Route::post('modules/areas',[AreaController::class,'store'])->name('area.store');
Route::get('modules/areas/{id}',[AreaController::class,'show'])->name('area.show');
Route::delete('modules/area/{id}',[AreaController::class,'destroy'])->name('area.destroy');
Route::get('modules/area/edit/{id}',[AreaController::class,'edit'])->name('area.edit');
Route::put('modules/areas/{id}',[AreaController::class,'update'])->name('area.update');

Route::get('modules/categorias',[CategoriaController::class,'index'])->name('categoria.index');
Route::get('modules/categorias/create',[CategoriaController::class,'create'])->name('categoria.create');
Route::post('modules/categorias',[CategoriaController::class,'store'])->name('categoria.store');
Route::get('modules/categorias/{id}',[CategoriaController::class,'show'])->name('categoria.show');
Route::delete('modules/categorias/{id}',[CategoriaController::class,'destroy'])->name('categoria.destroy');
Route::get('modules/categorias/edit/{id}',[CategoriaController::class,'edit'])->name('categoria.edit');
Route::put('modules/categorias/{id}',[CategoriaController::class,'update'])->name('categoria.update');

Route::get('modules/marcas',[MarcaController::class,'index'])->name('marca.index');
Route::get('modules/marcas/create',[MarcaController::class,'create'])->name('marca.create');
Route::post('modules/marcas',[MarcaController::class,'store'])->name('marca.store');
Route::get('modules/marcas/{id}',[MarcaController::class,'show'])->name('marca.show');
Route::delete('modules/marcas/{id}',[MarcaController::class,'destroy'])->name('marca.destroy');
Route::get('modules/marcas/edit/{id}',[MarcaController::class,'edit'])->name('marca.edit');
Route::put('modules/marcas/{id}',[MarcaController::class,'update'])->name('marca.update');
