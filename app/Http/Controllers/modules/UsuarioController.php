<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::all();
        view('modules/usuarios/index', compact('usuarios'));
    }
}
