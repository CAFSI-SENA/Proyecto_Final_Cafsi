<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Activo;
use App\Models\Baja;
use App\Models\CategoriaActivo;
use App\Models\Estado;
use App\Models\Marca;
use App\Models\TipoActivo;
use App\Models\TipoBaja;
use Illuminate\Http\Request;

class BajaController extends Controller
{
    public function index(){
        $bajas = Baja::all();
        $activos = Activo::all();
        $tiposbaja = TipoBaja::all();
        return view('modules/bajas/index',compact('bajas','activos','tiposbaja'));
    }

    public function search(){

    }

    public function create(){
        $bajas = Baja::all();
        $activos = Activo::all();
        $categorias = CategoriaActivo::all();
        $tipos = TipoActivo::all();
        $marcas = Marca::all();
        $estados = Estado::all();
        $tiposbaja = TipoBaja::all();
        return view('modules/bajas/create',compact('bajas','activos','categorias','tipos','marcas','estados','tiposbaja'));
    }

    public function store(Request $request){
        $bajas = Baja::create($request->all());
        return redirect()->route('baja.index',compact('bajas'));
    }

    public function show($id){
        $bajas = Baja::find($id);
        return view('modules/bajas/show',compact('bajas'));
    }

    public function destroy($id){
        $bajas = Baja::find($id)->delete();
        return redirect()->route('baja.index')->with([
            'message'=>'La baja fue eliminada con exito',
            'type'=>'danger'
        ]);
    }

    public function edit($id){
        $bajas = Baja::find($id);
        $activos = Activo::all();
        $tipos = TipoBaja::all();
        return view('modules/bajas/edit',compact('bajas','activos','tipos'));
    }

    public function update(Request $request,$id){
        $bajas = Baja::find($id)->update($request->all());
        return redirect()->route('bajas.show',compact('bajas'));
    }
}
