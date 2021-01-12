<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoActivo extends Model
{
    use HasFactory;
    protected $table='tipos_activo';
    protected $fillable=[
        'tipo','estado_id'
    ];
}
