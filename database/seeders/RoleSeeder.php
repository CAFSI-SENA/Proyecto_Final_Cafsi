<?php

namespace Database\Seeders;

use App\Http\Controllers\modules\ActivoController;
use App\Http\Controllers\modules\AreaController;
use App\Http\Controllers\modules\AsignacionController;
use App\Http\Controllers\modules\BajaController;
use App\Http\Controllers\modules\CategoriaController;
use App\Http\Controllers\modules\EstadoController;
use App\Http\Controllers\modules\FuncionarioController;
use App\Http\Controllers\modules\MarcaController;
use App\Http\Controllers\modules\PermissionController;
use App\Http\Controllers\modules\RoleController;
use App\Http\Controllers\modules\TipoActivoController;
use App\Http\Controllers\modules\TipoBajaController;
use App\Http\Controllers\modules\UsuarioController;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'SuperAdmin','description' => 'Administrador con todos los permisos']);
        $role2 = Role::create(['name'=>'Admin','description' => 'Administrador']);
        $role3 = Role::create(['name'=>'Auxiliar', 'description' => 'Auxiliar de bodega']);

        /*
         * Usuarios
         */
        Permission::updateOrCreate(['name' => UsuarioController::PERMISSIONS['create']],
            ['description' => 'Creación de usuarios'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => UsuarioController::PERMISSIONS['show']],
            ['description' => 'listado y detalle de usuario'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => UsuarioController::PERMISSIONS['edit']],
            ['description' => 'Edición de usuario'])->syncRoles([$role1,$role2]);
        /*
         * Activos
         */
        Permission::updateOrCreate(['name' => ActivoController::PERMISSIONS['create']],
            ['description' => 'Creación de activos'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => ActivoController::PERMISSIONS['show']],
            ['description' => 'listado y detalle de activo'])->syncRoles([$role1,$role2,$role3]);
        Permission::updateOrCreate(['name' => ActivoController::PERMISSIONS['edit']],
            ['description' => 'Edición de activo'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => ActivoController::PERMISSIONS['delete']],
            ['description' => 'Eliminar activo'])->syncRoles([$role1]);
        /*
         * Areas
         */
        Permission::updateOrCreate(['name' => AreaController::PERMISSIONS['create']],
            ['description' => 'Creación de areas'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => AreaController::PERMISSIONS['show']],
            ['description' => 'listado y detalle de area'])->syncRoles([$role1,$role2,$role3]);
        Permission::updateOrCreate(['name' => AreaController::PERMISSIONS['edit']],
            ['description' => 'Edición de area'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => AreaController::PERMISSIONS['delete']],
            ['description' => 'Eliminar area'])->syncRoles([$role1]);
        /*
         * Asignaciones
         */
        Permission::updateOrCreate(['name' => AsignacionController::PERMISSIONS['create']],
            ['description' => 'Creación de asignaciones'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => AsignacionController::PERMISSIONS['show']],
            ['description' => 'listado y detalle de asignación'])->syncRoles([$role1,$role2,$role3]);
        Permission::updateOrCreate(['name' => AsignacionController::PERMISSIONS['edit']],
            ['description' => 'Edición de asignación'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => AsignacionController::PERMISSIONS['delete']],
            ['description' => 'Eliminar asignación'])->syncRoles([$role1]);
        /*
         * Bajas
         */
        Permission::updateOrCreate(['name' => BajaController::PERMISSIONS['create']],
            ['description' => 'Creación de bajas'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => BajaController::PERMISSIONS['show']],
            ['description' => 'listado y detalle de baja'])->syncRoles([$role1,$role2,$role3]);
        Permission::updateOrCreate(['name' => BajaController::PERMISSIONS['edit']],
            ['description' => 'Edición de baja'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => BajaController::PERMISSIONS['delete']],
            ['description' => 'Eliminar baja'])->syncRoles([$role1]);
        /*
         * Categorias
         */
        Permission::updateOrCreate(['name' => CategoriaController::PERMISSIONS['create']],
            ['description' => 'Creación de categorias'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => CategoriaController::PERMISSIONS['show']],
            ['description' => 'listado y detalle de categoria'])->syncRoles([$role1,$role2,$role3]);
        Permission::updateOrCreate(['name' => CategoriaController::PERMISSIONS['edit']],
            ['description' => 'Edición de categoria'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => CategoriaController::PERMISSIONS['delete']],
            ['description' => 'Eliminar categoria'])->syncRoles([$role1]);
        /*
         * Estados
         */
      /*  Permission::updateOrCreate(['name' => EstadoController::PERMISSIONS['create']],
            ['description' => 'Creación de estados'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => EstadoController::PERMISSIONS['show']],
            ['description' => 'listado y detalle de estado'])->syncRoles([$role1,$role2,$role3]);
        Permission::updateOrCreate(['name' => EstadoController::PERMISSIONS['edit']],
            ['description' => 'Edición de estado'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => EstadoController::PERMISSIONS['delete']],
            ['description' => 'Eliminar estado'])->syncRoles([$role1]); */
        /*
         * Funcionarios
         */
        Permission::updateOrCreate(['name' => FuncionarioController::PERMISSIONS['create']],
            ['description' => 'Creación de funcionarios'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => FuncionarioController::PERMISSIONS['show']],
            ['description' => 'listado y detalle de funcionario'])->syncRoles([$role1,$role2,$role3]);
        Permission::updateOrCreate(['name' => FuncionarioController::PERMISSIONS['edit']],
            ['description' => 'Edición de funcionario'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => FuncionarioController::PERMISSIONS['delete']],
            ['description' => 'Eliminar funcionario'])->syncRoles([$role1]);
        /*
         * Marcas
         */
        Permission::updateOrCreate(['name' => MarcaController::PERMISSIONS['create']],
            ['description' => 'Creación de marcas'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => MarcaController::PERMISSIONS['show']],
            ['description' => 'listado y detalle de marca'])->syncRoles([$role1,$role2,$role3]);
        Permission::updateOrCreate(['name' => MarcaController::PERMISSIONS['edit']],
            ['description' => 'Edición de marca'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => MarcaController::PERMISSIONS['delete']],
            ['description' => 'Eliminar marca'])->syncRoles([$role1]);
        /*
         * Tipos de Activo
         */
        Permission::updateOrCreate(['name' => TipoActivoController::PERMISSIONS['create']],
            ['description' => 'Creación de tipo de activos'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => TipoActivoController::PERMISSIONS['show']],
            ['description' => 'listado y detalle de tipo de activo'])->syncRoles([$role1,$role2,$role3]);
        Permission::updateOrCreate(['name' => TipoActivoController::PERMISSIONS['edit']],
            ['description' => 'Edición de tipo de activo'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => TipoActivoController::PERMISSIONS['delete']],
            ['description' => 'Eliminar tipo de activo'])->syncRoles([$role1]);
        /*
         * Roles
        */
        Permission::updateOrCreate(['name' => RoleController::PERMISSIONS['create']],
            ['description' => 'Creación de roles'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => RoleController::PERMISSIONS['show']],
            ['description' => 'listado y detalle de rol'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => RoleController::PERMISSIONS['edit']],
            ['description' => 'Edición de rol'])->syncRoles([$role1,$role2]);
        Permission::updateOrCreate(['name' => RoleController::PERMISSIONS['delete']],
            ['description' => 'Eliminar rol'])->syncRoles([$role1]);
        /*
         * Permisos
         */
        Permission::updateOrCreate(['name' => PermissionController::PERMISSIONS['show']],
            ['description' => 'listado y detalle de permisos'])->syncRoles([$role1]);
        /*
         * Reportes
         */

    }
}
