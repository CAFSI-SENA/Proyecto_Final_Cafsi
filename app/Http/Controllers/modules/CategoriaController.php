<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\CategoriaActivo;
use App\Models\Estado;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    const PERMISSIONS = [
        'create' => 'admin-categorias-create',
        'show' => 'admin-categorias-show',
        'edit' => 'admin-categorias-edit',
        'delete' => 'admin-categorias-delete',
    ];

    public function __construct()
    {
        $this->middleware('permission:'.self::PERMISSIONS['create'])->only(['create','store']);
        $this->middleware('permission:'.self::PERMISSIONS['show'])->only(['index','show']);
        $this->middleware('permission:'.self::PERMISSIONS['edit'])->only(['edit','update']);
        $this->middleware('permission:'.self::PERMISSIONS['delete'])->only(['destroy']);
    }

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

    public function show($id){
        $categorias = CategoriaActivo::find($id);
        $estados = Estado::all();
        return view('modules/categorias/show',compact('categorias','estados'));
    }

    public function destroy($id){
        $categorias = CategoriaActivo::find($id)->delete();
        return redirect()->route('categoria.index')->with([
            'message'=>'La categoría fue eliminada con exito :_(','type'=>'danger'
        ]);
    }

    public function edit($id){
        $categorias = CategoriaActivo::find($id);
        $estados = Estado::all();
        return view('modules/categorias/edit',compact('categorias','estados'));
    }

    public function update(Request $request,$id){
        $categorias = CategoriaActivo::find($id)->update($request->all());
        return redirect()->route('categoria.show', $id)->with([
            'message'=>'La categoria fue actualizada con exito','type'=>'info'
        ]);
    }
}
