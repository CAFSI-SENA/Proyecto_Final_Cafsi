<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;
    protected $table = 'asignaciones';
    protected $fillable = [
      'fecha_inicio','fecha_fin','observacion','funcionario_id','activo_id','tipo_asignacion','estado_id'
    ];

    //Query Scope

    public function scopeIdentificacion($query, $identificacion){
        if ($identificacion)
            return $query->where('identificacion','LIKE',"%$identificacion%");
    }

    public function scopeSerie($query, $numero_serie){
        if ($numero_serie)
            return $query->where('numero_serie','LIKE',"%$numero_serie%");
    }
}
