<?php

namespace App\Http\Controllers\modules;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    const PERMISSIONS = [
        'show' => 'admin-permisos-show',
    ];

    public function __construct()
    {
        $this->middleware('permission:'.self::PERMISSIONS['show'])->only(['index','show']);
    }

    public function index(){

    }
}
