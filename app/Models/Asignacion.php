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
}
