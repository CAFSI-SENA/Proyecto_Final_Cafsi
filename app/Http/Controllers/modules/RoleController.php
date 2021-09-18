<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    const PERMISSIONS = [
        'create' => 'admin-roles-create',
        'show' => 'admin-roles-show',
        'edit' => 'admin-roles-edit',
        'delete' => 'admin-roles-delete',
    ];
/*
    public function __construct()
    {
        $this->middleware('permission:'.self::PERMISSIONS['create'])->only(['create','store']);
        $this->middleware('permission:'.self::PERMISSIONS['show'])->only(['index','show']);
        $this->middleware('permission:'.self::PERMISSIONS['edit'])->only(['edit','update']);
        $this->middleware('permission:'.self::PERMISSIONS['delete'])->only(['destroy']);
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Role::all();
        return view('modules/roles/index', [
            'rows' => $rows,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modules/roles/create', [
            'row' => new Role(),
            'permissions' => Permission::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles|max:48',
            'description' => 'required|max:255',
        ]);
        $roles = Role::create($request->all());
        $roles->permissions()->sync($request->permission);
        return redirect()->route('rol.index');
    }

    public function show(Role $role)
    {
        return view('modules/roles/show', [
            'row' => $role->load('permissions','users')
        ]);
    }

    public function edit(Role $role)
    {
        return view('modules/roles/edit', [
            'row' => $role,
            'permissions' => Permission::all(),
        ]);
    }

    public function update(Request $request, Role $role)
    {
        $role->update($request->all());
        $role->permissions()->sync($request->permission);
        return redirect()->route('rol.show', $role->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id)->delete();
        return redirect()->route('rol.index');
    }
}
