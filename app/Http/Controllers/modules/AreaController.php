<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Estado;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index(){
        $areas = Area::all();
        $estados = Estado::all();
        return view('modules/areas/index', compact('areas','estados'));
    }

    public function create(){
        $estados = Estado::all();
        return view('modules/areas/create',compact('estados'));
    }

    public function store(Request $request){
        $areas = Area::create($request->all());
        return redirect()->route('area.index')->with([
            'message'=>'El área fue creada con exito :)', 'type'=>'success'
        ]);
    }

    public function show($id){
        $areas = Area::find($id);
        $estados = Estado::all();
        return view('modules/areas/show',compact('areas','estados'));
    }

    public function destroy($id){
        $areas = Area::find($id)->delete();
        return redirect()->route('area.index')->with([
            'message'=>'el área fue eliminada con exito :_(', 'type'=>'danger'
        ]);
    }
}
