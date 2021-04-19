<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    const PERMISSIONS = [
        'create' => 'admin-marcas-create',
        'show' => 'admin-marcas-show',
        'edit' => 'admin-marcas-edit',
        'delete' => 'admin-marcas-delete',
    ];

    public function index(){
        $marcas = Marca::all();
        $estados = Estado::all();
        return view('modules/marcas/index',compact('marcas','estados'));
    }

    public function create(){
        $marcas = Marca::all();
        $estados = Estado::all();
        return view('modules/marcas/create',compact('marcas','estados'));
    }

    public function store(Request $request){
        $marcas = Marca::create($request->all());
        return redirect()->route('marca.index')->with([
           'message'=>'La marca fue creada con exito :)','type'=>'success'
        ]);
    }

    public function show($id){
        $marcas = Marca::find($id);
        $estados = Estado::all();
        return view('modules/marcas/show',compact('marcas','estados'));
    }

    public function destroy($id){
        $marcas = Marca::find($id)->delete();
        return redirect()->route('marca.index')->with([
            'message'=>'La marca fue eliminada con exito :_(','type'=>'danger'
        ]);
    }

    public function edit($id){
        $marcas = Marca::find($id);
        $estados = Estado::all();
        return view('modules/marcas/edit',compact('marcas','estados'));
    }

    public function update(Request $request, $id){
        $marcas = Marca::find($id)->update($request->all());
        return redirect()->route('marca.show',$id)->with([
            'message'=>'La marca fue actualizada con exito','type'=>'info'
        ]);
    }
}
