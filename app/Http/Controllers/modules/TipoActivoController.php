<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use App\Models\TipoActivo;
use Illuminate\Http\Request;

class TipoActivoController extends Controller
{
    const PERMISSIONS = [
        'create' => 'admin-tipo-activo-create',
        'show' => 'admin-tipo-activo-show',
        'edit' => 'admin-tipo-activo-edit',
        'delete' => 'admin-tipo-activo-delete',
    ];

    public function __construct()
    {
        $this->middleware('permission:'.self::PERMISSIONS['create'])->only(['create','store']);
        $this->middleware('permission:'.self::PERMISSIONS['show'])->only(['index','show']);
        $this->middleware('permission:'.self::PERMISSIONS['edit'])->only(['edit','update']);
        $this->middleware('permission:'.self::PERMISSIONS['delete'])->only(['destroy']);
    }

    public function index(){
        $tipos = TipoActivo::paginate(5);
        $estados = Estado::all();
        return view('modules/tipos/index',compact('tipos','estados'));
    }

    public function create(){
        $tipos = TipoActivo::all();
        $estados = Estado::all();
        return view('modules/tipos/create',compact('tipos','estados'));
    }

    public function store(Request $request){
        $request->validate([
            'tipo' => 'required|unique:tipos_activo|max:20',
        ]);
        $tipos = TipoActivo::create($request->all());
        return redirect()->route('tipo.index',compact('tipos'));
    }

    public function show($id){
        $tipos = TipoActivo::find($id);
        $estados = Estado::all();
        return view('modules/tipos/show',compact('tipos','estados'));
    }

    public function destroy($id){
        $tipos = TipoActivo::find($id)->delete();
        return redirect()->route('tipo.index')->with([
            'message'=>'El tipo de activo fue eliminado con exito','type'=>'danger'
        ]);
    }

    public function edit($id){
        $tipos = TipoActivo::find($id);
        $estados= Estado::where('id',1)
            ->orwhere('id',2)
            ->get();
        return view('modules/tipos/edit', compact('tipos','estados'));
    }

    public function update(Request $request,$id){
        $tipos = TipoActivo::find($id)->update($request->all());
        return redirect()->route('tipo.show',$id)->with([
            'message'=>'El tipo de activo fue actualizado con exito','type'=>'info'
        ]);
    }
}
