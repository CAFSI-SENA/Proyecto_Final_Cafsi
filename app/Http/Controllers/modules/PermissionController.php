<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    const PERMISSIONS = [
        'show' => 'admin-permisos-show',
    ];
/*
    public function __construct()
    {
        $this->middleware('permission:'.self::PERMISSIONS['show'])->only(['index','show']);
    }
*/
    public function index()
    {
        $permissions = Permission::orderBy('name')->paginate();

        return view('modules/permisos/index',
            [
                'rows' => $permissions,
            ]);
    }

    public function show(Permission $permission)
    {
        return view('modules/permisos/show',
            [
                'row' => $permission->load('roles', 'users'),
            ]);
    }
}
