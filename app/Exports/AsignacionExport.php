<?php

namespace App\Exports;

use App\Models\Asignacion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AsignacionExport implements FromView
{
    public function view(): View
    {
        $asignaciones = Asignacion::join('activos as a','asignaciones.activo_id','=','a.id')
            ->join('tipos_activo as t','t.id','=','a.tipo_activo_id')
            ->join('funcionarios as f','f.id','=','asignaciones.funcionario_id')
            ->join('tipos_asignacion as ta','ta.id','asignaciones.tipo_asignacion')
            ->select('a.numero_serie','t.tipo','f.nombres','f.apellidos','ta.tipo as tipo_asignacion','asignaciones.fecha_inicio','asignaciones.fecha_fin')
            ->get();

        return view('modules/asignaciones/report', compact('asignaciones'));
    }
}
