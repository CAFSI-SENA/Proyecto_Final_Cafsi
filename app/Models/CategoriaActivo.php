<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaActivo extends Model
{
    use HasFactory;
    protected $table='categorias_activo';
    protected $fillable=[
        'categoria','estado_id'
    ];
}
