<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Asignacion;
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
            $activo = Activo::where('numero_serie',$_GET['numero_serie'])->first();

        }
        if (@$_GET['identificacion']) {
            $funcionario = Funcionario::where('identificacion',$_GET['identificacion'])->first();
        }

        $asignaciones = Asignacion::all();
        return view('modules/asignaciones/create', compact('asignaciones','funcionario','activo'));
    }
}
