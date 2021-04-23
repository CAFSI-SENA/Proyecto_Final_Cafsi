<?php

namespace Database\Seeders;

use App\Http\Controllers\modules\ActivoController;
use App\Http\Controllers\modules\AreaController;
use App\Http\Controllers\modules\AsignacionController;
use App\Http\Controllers\modules\BajaController;
use App\Http\Controllers\modules\CategoriaController;
use App\Http\Controllers\modules\FuncionarioController;
use App\Http\Controllers\modules\MarcaController;
use App\Http\Controllers\modules\TipoActivoController;
use App\Http\Controllers\modules\UsuarioController;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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

    }
}
