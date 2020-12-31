<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
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


}
