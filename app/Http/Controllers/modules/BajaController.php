<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Activo;
use App\Models\Baja;
use App\Models\CategoriaActivo;
use App\Models\Estado;
use App\Models\Marca;
use App\Models\TipoActivo;
use Illuminate\Http\Request;

class BajaController extends Controller
{
    public function index(){
        $bajas = Baja::all();
        return view('modules/bajas/index',compact('bajas'));
    }

    public function create(){
        $bajas = Baja::all();
        $activos = Activo::all();
        $categorias = CategoriaActivo::all();
        $tipos = TipoActivo::all();
        $marcas = Marca::all();
        $estados = Estado::all();
        return view('modules/bajas/create',compact('bajas','activos','categorias','tipos','marcas','estados'));
    }

    public function store(Request $request){
        $bajas = Baja::create($request->all());
        return redirect()->route('baja.index');
    }
}
