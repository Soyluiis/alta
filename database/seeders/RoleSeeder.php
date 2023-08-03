<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Crear registros de roles
        Role::create(['name' => 'administrador', 'description' => 'Rol de administrador con acceso completo']);
        Role::create(['name' => 'usuario', 'description' => 'Rol de usuario con acceso limitado']);

        // Obtener el rol de usuario y los permisos específicos para usuario
        $userRole = Role::where('name', 'usuario')->first();
        $userPermissions = Permission::whereIn('name', ['crear_formularios', 'editar_formularios', 'eliminar_formularios'])->get();

        // Obtener solo los IDs de los permisos para usarlos en el método attach
        $permissionIds = $userPermissions->pluck('id')->toArray();

        // Asignar los permisos al rol de usuario
        $userRole->permissions()->attach($permissionIds);
    }
}
