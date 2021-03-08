<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Asignacion;
use App\Models\TipoAsignacion;
use Illuminate\Http\Request;
use App\Models\Activo;
use App\Models\Funcionario;

class AsignacionController extends Controller
{
    public function index(){
        $asignaciones = Asignacion::all();
        return view('modules/asignaciones/index', compact('asignaciones'));
    }

    public function create(){

        $funcionario = [];
        $activo = [];

        if (@$_GET['numero_serie']) {
            $activo = Activo::join('categorias_activo','categorias_activo.id','=','activos.categoria_id')
                ->join('tipos_activo','tipos_activo.id','=','activos.tipo_activo_id')
                ->join('marcas','marcas.id','=','activos.marca_id')
                ->select('activos.*','categorias_activo.*','tipos_activo.*','marcas.*')
            ->where('numero_serie',$_GET['numero_serie'])->first();

        }
        if (@$_GET['identificacion']) {
            $funcionario = Funcionario::join('areas','areas.id','=','funcionarios.area_id')
                ->select('funcionarios.*','areas.*')
            ->where('identificacion',$_GET['identificacion'])->first();
        }

        $asignaciones = Asignacion::all();
        $tipos_asignaciones = TipoAsignacion::all();
        return view('modules/asignaciones/create', compact('asignaciones','funcionario','activo','tipos_asignaciones'));
    }
}
