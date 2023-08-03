<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        // Crear registros de permisos
        Permission::create(['name' => 'crear_formularios', 'description' => 'Permite crear formularios']);
        Permission::create(['name' => 'editar_formularios', 'description' => 'Permite editar formularios']);
        Permission::create(['name' => 'eliminar_formularios', 'description' => 'Permite eliminar formularios']);
        // Agrega más permisos según tus necesidades
    }
}
