<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\CategoriaActivo;
use App\Models\Estado;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = CategoriaActivo::all();
        $estados = Estado::all();
        return view('modules/categorias/index',compact('categorias','estados'));
    }

    public function create(){
        $categorias = CategoriaActivo::all();
        $estados = Estado::all();
        return view('modules/categorias/create',compact('categorias','estados'));
    }

    public function store(Request $request){
        $categorias = CategoriaActivo::create($request->all());
        return redirect()->route('categoria.index')->with([
            'message'=>'La categoría fue creada con exito','type'=>'success'
        ]);
    }

    public function show(){

    }

    public function destroy(){

    }

    public function edit(){

    }

    public function update(){

    }
}
