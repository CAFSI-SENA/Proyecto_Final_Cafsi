<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    protected $fillable=[
        'nombres','apellidos','identificacion','telefono','celular','tipo_identificacion_id','genero_id','area_id','estado_id'
    ];
}
