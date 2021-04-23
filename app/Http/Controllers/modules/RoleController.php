<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    const PERMISSIONS = [
        'create' => 'admin-roles-create',
        'show' => 'admin-roles-show',
        'edit' => 'admin-roles-edit',
        'delete' => 'admin-roles-delete',
    ];

    public function __construct(){

        $this->middleware('permission:'.self::PERMISSIONS['create'])->only(['create','store']);
        $this->middleware('permission:'.self::PERMISSIONS['show'])->only(['index','show']);
        $this->middleware('permission:'.self::PERMISSIONS['edit'])->only(['edit','update']);
        $this->middleware('permission:'.self::PERMISSIONS['delete'])->only(['destroy']);
    }
}
