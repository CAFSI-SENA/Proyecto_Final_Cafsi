<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\modules\AreaController;
use App\Http\Controllers\modules\CategoriaController;
use App\Http\Controllers\modules\MarcaController;
use App\Http\Controllers\modules\TipoActivoController;
use App\Http\Controllers\modules\FuncionarioController;
use App\Http\Controllers\modules\ActivoController;
use App\Http\Controllers\modules\BajaController;
use App\Http\Controllers\modules\UsuarioController;
use App\Http\Controllers\modules\AsignacionController;
use App\Http\Controllers\modules\RoleController;
use App\Http\Controllers\modules\PermissionController;

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

Route::middleware('auth')->group(function(){
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

    Route::get('modules/tipos/index',[TipoActivoController::class,'index'])->name('tipo.index');
    Route::get('modules/tipos/create',[TipoActivoController::class,'create'])->name('tipo.create');
    Route::post('modules/tipos/',[TipoActivoController::class,'store'])->name('tipo.store');
    Route::get('modules/tipos/{id}',[TipoActivoController::class,'show'])->name('tipo.show');
    Route::delete('modules/tipos/{id}',[TipoActivoController::class,'destroy'])->name('tipo.destroy');
    Route::get('modules/tipos/edit/{id}',[TipoActivoController::class,'edit'])->name('tipo.edit');
    Route::put('modules/tipos/{id}',[TipoActivoController::class,'update'])->name('tipo.update');

    Route::get('modules/funcionarios/index',[FuncionarioController::class,'index'])->name('funcionario.index');
    Route::get('modules/funcionarios/create',[FuncionarioController::class,'create'])->name('funcionario.create');
    Route::post('modules/funcionarios',[FuncionarioController::class,'store'])->name('funcionario.store');
    Route::get('modules/funcionarios/{id}',[FuncionarioController::class,'show'])->name('funcionario.show');
    Route::delete('modules/funcionarios/{id}',[FuncionarioController::class,'destroy'])->name('funcionario.destroy');
    Route::get('modules/funcionarios/edit/{id}',[FuncionarioController::class,'edit'])->name('funcionario.edit');
    Route::put('modules/funcionarios/{id}',[FuncionarioController::class,'update'])->name('funcionario.update');

    Route::get('modules/activos/index',[ActivoController::class,'index'])->name('activo.index');
    Route::get('modules/activos/create',[ActivoController::class,'create'])->name('activo.create');
    Route::post('modules/activos',[ActivoController::class,'store'])->name('activo.store');
    Route::get('modules/activos/{id}',[ActivoController::class,'show'])->name('activo.show');
    Route::delete('modules/activos/{id}',[ActivoController::class,'destroy'])->name('activo.destroy');
    Route::get('modules/activos/edit/{id}',[ActivoController::class,'edit'])->name('activo.edit');
    Route::put('modules/activos/{id}',[ActivoController::class,'update'])->name('activo.update');
    Route::get('modules/activos',[ActivoController::class,'search'])->name('activo.search');

    Route::get('modules/bajas/index',[BajaController::class,'index'])->name('baja.index');
    Route::get('modules/bajas/create',[BajaController::class,'create'])->name('baja.create');
    Route::post('modules/bajas',[BajaController::class,'store'])->name('baja.store');
    Route::get('modules/bajas/{id}',[BajaController::class,'show'])->name('baja.show');
    Route::delete('modules/bajas/{id}',[BajaController::class,'destroy'])->name('baja.destroy');
    Route::get('modules/bajas/edit/{id}',[BajaController::class,'edit'])->name('baja.edit');
    Route::put('modules/bajas/{id}',[BajaController::class,'update'])->name('baja.update');
/*
    Route::get('auth/index',[UsuarioController::class,'index'])->name('usuario.index');
    Route::get('auth/index',[UsuarioController::class,'show'])->name('usuario.show');
    Route::get('auth/index',[UsuarioController::class,'edit'])->name('usuario.edit');*/

    Route::get('modules/usuarios/create',[UsuarioController::class,'create'])->name('user.create');
    Route::post('modules/usuarios',[UsuarioController::class,'store'])->name('user.store');
    Route::get('modules/usuarios/index',[UsuarioController::class,'index'])->name('user.index');
    Route::get('modules/usuarios/edit/{user}',[UsuarioController::class,'edit'])->name('user.edit');
    Route::put('modules/usuarios/edit',[UsuarioController::class,'update'])->name('user.update');
    Route::get('modules/usuarios/show/{user}',[UsuarioController::class,'show'])->name('user.show');
    Route::get('modules/usuarios/{user}/show-permissions', [UsuarioController::class,'permissionshow'])->name('user.permissionshow');

    Route::patch('modules/usuarios/{user}/roles', [UsuarioController::class, 'role'])->name('user.role');
    Route::patch('modules/usuarios/{user}/permisos', [UsuarioController::class, 'permission'])->name('user.permission');

    Route::resource('roles', RoleController::class)
        ->names('rol')
        ->parameters(['permisos' => 'rol']);

    Route::resource('permisos', PermissionController::class)
        ->names('permission')
        ->parameters(['permisos' => 'permission'])
        ->only(['index','show']);


    Route::get('modules/asignaciones/index',[AsignacionController::class,'index'])->name('asignacion.index');
    Route::get('modules/asignaciones/create',[AsignacionController::class,'create'])->name('asignacion.create');
    Route::post('modules/asignaciones',[AsignacionController::class,'store'])->name('asignacion.store');
});


