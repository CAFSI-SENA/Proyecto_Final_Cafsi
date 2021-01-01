<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\TipoActivo;
use App\Models\Estado;
use Illuminate\Http\Request;

class TipoActivoController extends Controller
{
    public function index(){
        $tipos = TipoActivo::all();
        $estados = Estado::all();
        return view('modules/tipos/index',compact('tipos','estados'));
    }

    public function create(){
        $tipos = TipoActivo::all();
        return view('modules/tipos/create',compact('tipos'));
    }

    public function store(Request $request){
        $tipos = TipoActivo::create($request->all());
        return redirect()->route('tipo.index',compact('tipos'));
    }

    public function show($id){
        $tipos = TipoActivo::find($id);
        return view('modules/tipos/show/{id}',compact('tipos'));
    }

    public function edit($id){
        $tipos = TipoActivo::find($id);
        $estados= Estado::all();
        return view('modules/tipos/{id}', compact('tipos'));
    }

    public function update(Request $request,$id){
        $tipos = TipoActivo::find($id)->update($request->all());
        return redirect()->route('tipo.show',$id,compact('tipos'));
    }
}
