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
        return view('categoria.index',compact('categorias','estados'));
    }

    public function create(){

    }

    public function store(){

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
