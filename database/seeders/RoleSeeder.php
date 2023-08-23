<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /* public function run()
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

    } */



    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $adminUser = User::find(1);
        $userUser = User::find(2);

        $adminUser->roles()->attach($adminRole->id);
        $userUser->roles()->attach($userRole->id);
    }
}
