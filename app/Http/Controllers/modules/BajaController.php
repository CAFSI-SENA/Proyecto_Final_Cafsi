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
        return view('modules/bajas/index',compact('bajas','activos'));
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
}
