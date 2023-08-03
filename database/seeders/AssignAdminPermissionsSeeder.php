<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class AssignAdminPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Obtener el rol de administrador y todos los permisos
        $adminRole = Role::where('name', 'administrador')->first();
        $allPermissions = Permission::all();

        // Obtener solo los IDs de los permisos para usarlos en el método attach
        $permissionIds = $allPermissions->pluck('id')->toArray();

        // Asignar todos los permisos al rol de administrador
        $adminRole->permissions()->attach($permissionIds);
    }
}

