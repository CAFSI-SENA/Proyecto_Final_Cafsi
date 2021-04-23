<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsuarioController extends Controller
{
    const PERMISSIONS = [
        'create' => 'admin-usuarios-create',
        'show' => 'admin-usuarios-show',
        'edit' => 'admin-usuarios-edit',
    ];
/*
    public function __construct()
    {
        $this->middleware('permission:'.self::PERMISSIONS['create'])->only(['create','store']);
        $this->middleware('permission:'.self::PERMISSIONS['show'])->only(['index','show']);
        $this->middleware('permission:'.self::PERMISSIONS['edit'])->only(['edit','update']);
    }
*/
    public function index(){
        $users = User::all();
        return view('modules/usuarios/index', compact('users'));
    }

    public function show(User $user){
        return view('modules/usuarios/show',[
            'row' => $user,
            'roles' => Role::all(),
            'permissions' => Permission::all(),
        ]);
    }

    public function edit(User $user){
        return view('modules/usuarios/edit',[
            'row' => $user,
            'roles' => Role::all(),
            'permissions' => Permission::all(),
        ]);
    }

    public function update(Request $request, User $user)
    {
        return redirect()->route('user.show', [
            'row' => $user,
            'roles' => Role::all(),
            'permissions' => Permission::all(),
        ]);
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
        return redirect()->route('user.index');
    }

    public function role(Request $request,User $user)
    {
        $user->roles()->sync($request->roles); //eloquent
        //$user->syncRoles($request->roles); otra forma

        return redirect()->route('user.show', $user->id);
    }

    public function permission(Request $request,User $user)
    {
        $user->syncPermissions($request->permissions);
        return redirect()
            ->route('user.show', $user->id);
    }

    public function permissionshow(User $user)
    {
        return view('modules/usuarios/show-permissions',[
            'row' => $user,
            'roles' => Role::all(),
            'permissions' => Permission::all(),
        ]);

    }
}
