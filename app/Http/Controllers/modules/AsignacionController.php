<?php

namespace App\Http\Controllers\modules;

use App\Exports\AsignacionExport;
use App\Http\Controllers\Controller;
use App\Models\Activo;
use App\Models\Asignacion;
use App\Models\Funcionario;
use App\Models\TipoAsignacion;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AsignacionController extends Controller
{
    const PERMISSIONS = [
        'create' => 'admin-asignaciones-create',
        'show' => 'admin-asignaciones-show',
        'edit' => 'admin-asignaciones-edit',
        'delete' => 'admin-asignaciones-delete',
    ];

    public function index(Request $request)
    {
        if (@$_GET['numero_serie']) {
            $numero_serie = $request->get('numero_serie');
            $asignaciones = Asignacion::join('activos as a', 'asignaciones.activo_id', '=', 'a.id')
                ->join('tipos_activo as t', 't.id', '=', 'a.tipo_activo_id')
                ->join('funcionarios as f', 'f.id', '=', 'asignaciones.funcionario_id')
                ->join('tipos_asignacion as ta', 'ta.id', 'asignaciones.tipo_asignacion')
                ->select('a.numero_serie', 't.tipo', 'f.nombres', 'f.apellidos', 'ta.tipo as tipo_asignacion', 'asignaciones.fecha_inicio', 'asignaciones.fecha_fin',
                    'asignaciones.id')
                ->where('numero_serie', 'LIKE', "%$numero_serie%")
                ->whereNull('asignaciones.fecha_fin')
                ->get();
        }else
            $asignaciones = Asignacion::join('activos as a', 'asignaciones.activo_id', '=', 'a.id')
                ->join('tipos_activo as t', 't.id', '=', 'a.tipo_activo_id')
                ->join('funcionarios as f', 'f.id', '=', 'asignaciones.funcionario_id')
                ->join('tipos_asignacion as ta', 'ta.id', 'asignaciones.tipo_asignacion')
                ->select('a.numero_serie', 't.tipo', 'f.nombres', 'f.apellidos', 'ta.tipo as tipo_asignacion', 'asignaciones.fecha_inicio', 'asignaciones.fecha_fin',
                    'asignaciones.id')
                ->where('asignaciones.fecha_fin', '=', null)
                ->get();

        return view('modules/asignaciones/index', compact('asignaciones'));
    }

    public function create(){

        $funcionario = [];
        $activo = [];
        $asignaciones = [];

        if (@$_GET['numero_serie'])
        {
            //valida si existe activo ya asignado
            $asignaciones=Asignacion::join('Activos','activo_id','=','asignaciones.acivo_id')
                ->select('activo_id')
                ->where('numero_serie',$_GET['numero_serie']);

            //si no existe activo asignado trae info activo para asignar.
            if($asignaciones == null)
            {
                $activo = Activo::join('categorias_activo', 'categorias_activo.id', '=', 'activos.categoria_id')
                    ->join('tipos_activo', 'tipos_activo.id', '=', 'activos.tipo_activo_id')
                    ->join('marcas', 'marcas.id', '=', 'activos.marca_id')
                    ->select('activos.*', 'categorias_activo.*', 'tipos_activo.*', 'marcas.*')
                    ->where('numero_serie', $_GET['numero_serie'])
                    ->first();
            }
            else
            {
                return view('modules/asignaciones/create',compact('asignaciones'));
            }
        }
        if (@$_GET['identificacion']) {
            $funcionario = Funcionario::join('areas','areas.id','=','funcionarios.area_id')
                ->select('funcionarios.id','funcionarios.nombres','funcionarios.apellidos','funcionarios.celular','areas.area')
                ->where('identificacion',$_GET['identificacion'])->first();
        }

        //$asignaciones = Asignacion::all();
        $tipos_asignacion = TipoAsignacion::all();
        $hora = Carbon::now();
        //$asignaciones = Asignacion::join('tipos_asignacion','tipos_asignacion.id','=','asignaciones.tipo_asignacion')
        //->select('asignaciones.*','tipos_asignacion.tipo','tipos_asignacion.id')
        //->where('asignaciones.tipo_asignacion','tipos_asignacion.id')
        //->first();
        return view('modules/asignaciones/create', compact('funcionario','activo','tipos_asignacion','hora'));
    }

    public function store(Request $request){
        $request->validate([
            'fecha_inicio' => 'required',
            'funcionario_id' => 'required',
            'activo_id' => 'required',
            'tipo_asignacion' => 'required',
            'estado_id' => 'required'
        ]);
        $asignaciones = Asignacion::create($request->all());
        return redirect()->route('asignacion.index');
    }

    public function edit($id){

        $funcionario = [];
        $activo = [];

        /*      if (@$_GET['numero_serie']) {
              $activo = Asignacion::join('funcionarios','funcionarios.id','=','asignaciones.funcionario_id')
                  ->join('activos','activos.id','=','asignaciones.activo_id')
                  ->join('estados','estados.id','=','asignaciones.estado_id')
                  ->join('categorias_activo','categorias_activo.id','=','activos.categoria_id')
                  ->join('tipos_asignacion','tipos_asignacion.id','=','asignaciones.tipo_asignacion')
                  ->join('tipos_activo','tipos_activo.id','=','activos.tipo_activo_id')
                  ->join('marcas','marcas.id','=','activos.marca_id')
                  ->join('areas','areas.id','=','funcionarios.area_id')
                  ->select('activos.numero_serie','activos.modelo','categorias_activo.categoria','tipos_activo.tipo',
                           'marcas.marca','funcionarios.identificacion','funcionarios.nombres','funcionarios.apellidos','funcionarios.celular','areas.area',
                           'asignaciones.fecha_inicio','tipos_asignacion.tipo','asignaciones.observacion','asignaciones.id','estados.estado')
                  ->where('numero_serie',$_GET['numero_serie'])->first();
              }
              if (@$_GET['identificacion']) {
                  $funcionario = Asignacion::join('funcionarios','funcionarios.id','=','asignaciones.funcionario_id')
                      ->join('activos','activos.id','=','asignaciones.activo_id')
                      ->join('estados','estados.id','=','estado_id')
                      ->join('categorias_activo','categorias_activo.id','=','activos.categoria_id')
                      ->join('tipos_activo','tipos_activo.id','=','activos.tipo_activo_id')
                      ->join('marcas','marcas.id','=','activos.marca_id')
                      ->join('areas','areas.id','=','funcionarios.area_id')
                      ->select('activos.numero_serie','activos.modelo','categorias_activo.categoria','tipos_activo.tipo',
                          'marcas.marca','funcionarios.nombres','funcionarios.apellidos','funcionarios.celular','areas.area',
                          'asignaciones.fecha_inicio','tipos_asignacion.tipo','estados.estado')
                      ->where('identificacion',$_GET['identificacion'])->first();
              }
              $hora = Carbon::now();
              return view('modules/asignaciones/edit', compact('funcionario','activo','hora'));*/


        $activo = Asignacion::join('funcionarios','funcionarios.id','=','asignaciones.funcionario_id')
            ->join('activos','activos.id','=','asignaciones.activo_id')
            ->join('estados','estados.id','=','asignaciones.estado_id')
            ->join('categorias_activo','categorias_activo.id','=','activos.categoria_id')
            ->join('tipos_asignacion','tipos_asignacion.id','=','asignaciones.tipo_asignacion')
            ->join('tipos_activo','tipos_activo.id','=','activos.tipo_activo_id')
            ->join('marcas','marcas.id','=','activos.marca_id')
            ->join('areas','areas.id','=','funcionarios.area_id')
            ->select('activos.numero_serie','activos.modelo','categorias_activo.categoria','tipos_activo.tipo',
                'marcas.marca','funcionarios.identificacion','funcionarios.nombres','funcionarios.apellidos','funcionarios.celular','areas.area',
                'asignaciones.fecha_inicio','tipos_asignacion.tipo','asignaciones.observacion','asignaciones.id','estados.estado')
            ->where('asignaciones.id',$id)->first();

        $hora = Carbon::now();
        return view('modules/asignaciones/edit', compact('funcionario','activo','hora'));
    }

    public function update(Request $request,$id){
        $asignaciones = Asignacion::find($id)->update($request->all());
        return redirect()->route('asignacion.show', $id);
    }

    public function show($id){
        $activo = Asignacion::join('funcionarios','funcionarios.id','=','asignaciones.funcionario_id')
            ->join('activos','activos.id','=','asignaciones.activo_id')
            ->join('estados','estados.id','=','asignaciones.estado_id')
            ->join('categorias_activo','categorias_activo.id','=','activos.categoria_id')
            ->join('tipos_asignacion','tipos_asignacion.id','=','asignaciones.tipo_asignacion')
            ->join('tipos_activo','tipos_activo.id','=','activos.tipo_activo_id')
            ->join('marcas','marcas.id','=','activos.marca_id')
            ->join('areas','areas.id','=','funcionarios.area_id')
            ->select('activos.numero_serie','activos.modelo','categorias_activo.categoria','tipos_activo.tipo',
                'marcas.marca','funcionarios.identificacion','funcionarios.nombres','funcionarios.apellidos',
                'funcionarios.celular','areas.area', 'asignaciones.fecha_inicio','tipos_asignacion.tipo',
                'asignaciones.observacion','asignaciones.id','estados.estado','asignaciones.fecha_fin')
            ->where('asignaciones.id',$id)->first();

        return view('modules/asignaciones/show', compact('activo'));
    }

    public function destroy(){

    }

    public function export()
    {
        return Excel::download(new AsignacionExport, 'Asignaciones.xlsx');
    }

    public function devolucion(){
        $devoluciones = Asignacion::join('categorias_activo','categorias_activo.id','=','activos.categoria_id')
            ->join('tipos_activo','tipos_activo.id','=','activos.tipo_activo_id')
            ->join('marcas','marcas.id','=','activos.marca_id')
            ->select('activos.*','categorias_activo.*','tipos_activo.*','marcas.*')
            ->where('numero_serie',$_GET['numero_serie'])->first();
    }
}
