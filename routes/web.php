<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\modules\AreaController;
use App\Http\Controllers\modules\CategoriaController;

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
