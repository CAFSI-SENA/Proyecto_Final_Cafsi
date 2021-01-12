<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoBaja extends Model
{
    use HasFactory;
    protected $table = 'tipos_baja';
    protected $fillable=[
      'tipo','estado_id'
    ];
}
