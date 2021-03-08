<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAsignacion extends Model
{
    use HasFactory;
    protected $table = 'tipos_asignacion';
    protected $fillable = [
      'tipo'
    ];
}
