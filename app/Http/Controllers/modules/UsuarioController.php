<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\WithPagination;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsuarioController extends Controller
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function index()
    {
        $users = User::all();
        //$users = User::where('name', 'LIKE', '%' . $this->search . '%');
        return view('modules/usuarios/index', compact('users'));
    }

    public function show(User $user)
    {
        return view('modules/usuarios/show',[
            'row' => $user,
            'roles' => Role::all(),
            'permissions' => Permission::all(),
        ]);
    }

    public function create()
    {
        return view('modules/usuarios/create');
    }

    public function edit(User $user)
    {
        //$roles = Role::all();
        //$users = User::find($user);

        return view('modules/usuarios/edit',[
            'row' => $user,
            'roles' => Role::all(),
            'permissions' => Permission::all(),
        ]);
    }

    public function update(Request $request, User $user)
    {
        /*  return view('admin/users/show',[
              'row' => $user,
              'roles' => Role::all(),
              'permissions' => Permission::all(),
          ]);*/

        return redirect()->route('user.show',[
            'row' => $user,
            'roles' => Role::all(),
            'permissions' => Permission::all(),
        ]);
        //$user->update($request->all());
        //$user->roles()->sync($request->roles);
        //return redirect()->route('user.edit',$user);

        //$user->roles()->sync($request->roles); //eloquent Funciona
        //$user->syncRoles($request->roles); otra forma

        //return redirect()->route('user.index', $user->id); Funciona
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
        return redirect()->route('user.show', $user->id);
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
