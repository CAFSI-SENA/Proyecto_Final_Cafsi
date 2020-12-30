<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\Estado;
use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index(){
        $marcas = Marca::all();
        $estados = Estado::all();
        return view('modules/marcas/index',compact('marcas','estados'));
    }
}
