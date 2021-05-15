<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Estado;
use App\Models\Genero;
use App\Models\TipoIdentificacion;
use function GuzzleHttp\Promise\all;

class FuncionarioController extends Controller
{
    const PERMISSIONS = [
        'create' => 'admin-funcionarios-create',
        'show' => 'admin-funcionarios-show',
        'edit' => 'admin-funcionarios-edit',
        'delete' => 'admin-funcionarios-delete',
    ];

    public function __construct()
    {
        $this->middleware('permission:'.self::PERMISSIONS['create'])->only(['create','store']);
        $this->middleware('permission:'.self::PERMISSIONS['show'])->only(['index','show']);
        $this->middleware('permission:'.self::PERMISSIONS['edit'])->only(['edit','update']);
        $this->middleware('permission:'.self::PERMISSIONS['delete'])->only(['destroy']);
    }

    public function index(){
        $funcionarios = Funcionario::all();
        $areas = Area::all();
        $estados = Estado::all();
        $generos = Genero::all();
        $tiposidentificacion = TipoIdentificacion::all();
        return view('modules/funcionarios/index',compact('funcionarios','areas','estados','generos','tiposidentificacion'));
    }

    public function create(){
        $funcionarios = Funcionario::all();
        $areas = Area::all();
        $estados = Estado::all();
        $generos = Genero::all();
        $tiposidentificacion = TipoIdentificacion::all();
        return view('modules/funcionarios/create',compact('funcionarios','areas','estados','generos','tiposidentificacion'));
    }

    public function store(Request $request){
        $funcionarios = Funcionario::create($request->all());
        return redirect()->route('funcionario.index')->with([
            'message'=>'El funcionario fue creado con exito :)','type'=>'success'
        ]);
    }

    public function show($id){
        $funcionarios = Funcionario::find($id);
        $areas = Area::all();
        $estados = Estado::all();
        $generos = Genero::all();
        $tiposidentificacion = TipoIdentificacion::all();
        return view('modules/funcionarios/show',compact('funcionarios','areas','estados','generos','tiposidentificacion'));
    }

    public function destroy($id){
        $funcionarios = Funcionario::find($id)->delete();
        return redirect()->route('funcionario.index')->with([
            'message'=>'El funcionario fue eliminado con exito :_(','type'=>'danger'
        ]);
    }

    public function edit($id){
        $funcionarios = Funcionario::find($id);
        $areas = Area::all();
        $estados = Estado::all();
        $generos = Genero::all();
        $tiposidentificacion = TipoIdentificacion::all();
        return view('modules/funcionarios/edit',compact('funcionarios','areas','estados','generos','tiposidentificacion'));
    }

    public function update(Request $request,$id){
        $funcionarios = Funcionario::find($id)->update($request->all());
        return redirect()->route('funcionario.show',$id);
    }
}
