<?php

namespace App\Imports;

use App\Models\Activo;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class ActivosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Activo([
            'numero_serie' => $row[0],
            'modelo' => $row[1],
            'fecha_adquisicion' => $row[2],
            'categoria_id' => $row[3],
            'tipo_activo_id' => $row[4],
            'marca_id' => $row[5],
            'estado_id' => $row[6],
        ]);
    }
}
