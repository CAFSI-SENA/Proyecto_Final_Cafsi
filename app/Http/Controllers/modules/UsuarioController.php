<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = User::all();
        return view('modules.usuarios.index', compact('usuarios'));
    }

    public function create(){
        $usuarios = User::all();
        return view('modules/usuarios/create');
    }

    public function store(Request $request){
        $usuarios = new User();
        $usuarios->name = $request->name;
        $usuarios->email = $request->email;
        $usuarios->password = bcrypt($request->password);
        $usuarios->save();
        //$usuarios = User::create($request->all());
        return redirect()->route('usuario.index');
    }

    public function show($id){
        $usuarios = User::find($id);
        return view('modules/usuarios/show', compact('usuarios'));
    }

    public function edit($id){
        $usuarios = User::find($id);
        return view('modules/usuarios/edit',compact('usuarios'));
    }

    public function update(Request $request, $id){
        $usuarios = User::find($id)->update($request->all());
        return redirect()->route('usuario.show',$id);
    }

    public function destroy($id){
        $usuarios = User::find($id)->delete();
        return view('modules/usuarios/index', compact('usuarios'));
    }

    public function reset(){
        $usuarios = User::find($id);
        return view('modules/usuarios/reset',compact('usuarios'));
    }
}
;
