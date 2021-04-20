<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    const PERMISSIONS = [
        'create' => 'admin-users-create',
        'show' => 'admin-users-show',
        'edit' => 'admin-users-edit',
    ];

    public function __construct()
    {
        $this->middleware('permission:'.self::PERMISSIONS['create'])->only(['create','store']);
        $this->middleware('permission:'.self::PERMISSIONS['show'])->only(['index','show']);
        $this->middleware('permission:'.self::PERMISSIONS['edit'])->only(['edit','update']);
    }

    public function index(){
        $usuarios = User::all();
        view('modules/usuarios/index', compact('usuarios'));
    }

    public function show(){

    }

    public function edit(){

    }
}
