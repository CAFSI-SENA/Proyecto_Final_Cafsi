<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    use HasFactory;
    protected $fillable=[
      'numero_serie','modelo','fecha_adquisicion','categoria_id','tipo_activo_id','marca_id','estado_id'
    ];
}
