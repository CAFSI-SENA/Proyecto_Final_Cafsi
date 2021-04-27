<?php

namespace App\Http\Controllers\modules;

use App\Exports\AsignacionExport;
use App\Http\Controllers\Controller;
use App\Models\Asignacion;
use App\Models\TipoAsignacion;
use Illuminate\Http\Request;
use App\Models\Activo;
use App\Models\Funcionario;
use Maatwebsite\Excel\Facades\Excel;

class AsignacionController extends Controller
{
    const PERMISSIONS = [
        'create' => 'admin-asignaciones-create',
        'show' => 'admin-asignaciones-show',
        'edit' => 'admin-asignaciones-edit',
        'delete' => 'admin-asignaciones-delete',
    ];

    public function index(){
        $asignaciones = Asignacion::join('activos as a','asignaciones.activo_id','=','a.id')
            ->join('tipos_activo as t','t.id','=','a.tipo_activo_id')
            ->join('funcionarios as f','f.id','=','asignaciones.funcionario_id')
            ->join('tipos_asignacion as ta','ta.id','asignaciones.tipo_asignacion')
            ->select('a.numero_serie','t.tipo','f.nombres','f.apellidos','ta.tipo as tipo_asignacion','asignaciones.fecha_inicio','asignaciones.fecha_fin')
            ->get();

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
                ->select('funcionarios.id','funcionarios.nombres','funcionarios.apellidos','funcionarios.celular','areas.area')
            ->where('identificacion',$_GET['identificacion'])->first();
        }

        $asignaciones = Asignacion::all();
        $tipos_asignacion = TipoAsignacion::all();
        //$asignaciones = Asignacion::join('tipos_asignacion','tipos_asignacion.id','=','asignaciones.tipo_asignacion')
        //->select('asignaciones.*','tipos_asignacion.tipo','tipos_asignacion.id')
        //->where('asignaciones.tipo_asignacion','tipos_asignacion.id')
        //->first();
        return view('modules/asignaciones/create', compact('asignaciones','funcionario','activo','tipos_asignacion'));
    }

    public function store(Request $request){
        $asignaciones = Asignacion::create($request->all());
        return redirect()->route('asignacion.index');
    }

    public function update(){

    }

    public function show(){

    }

    public function destroy(){

    }

    public function export()
    {
        return Excel::download(new AsignacionExport, 'Asignaciones.xlsx');
    }
}
