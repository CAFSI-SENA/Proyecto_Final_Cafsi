<?php

namespace App\Exports;

use App\Models\Activo;
use App\Models\CategoriaActivo;
use App\Models\Estado;
use App\Models\Marca;
use App\Models\TipoActivo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ActivoExport implements FromView
{
    public function view(): View
    {
        $activos = Activo::all();
        $categorias = CategoriaActivo::all();
        $tipos = TipoActivo::all();
        $marcas = Marca::all();
        $estados = Estado::all();
        return view('modules/activos/report', compact('activos','categorias','tipos','marcas','estados'));
    }
}
