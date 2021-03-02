<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Asignacion;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    public function index(){
        $asignaciones = Asignacion::all();
        return view('modules/asignaciones/index', compact('asignaciones'));
    }

    public function create(){
        $asignaciones = Asignacion::all();
        return view('modules/asignaciones/create', compact('asignaciones'));
    }
}
