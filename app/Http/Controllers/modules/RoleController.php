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
        $roles = Role::create($request->all());
        $roles->permissions()->sync($request->permission);
        return redirect()->route('rol.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
