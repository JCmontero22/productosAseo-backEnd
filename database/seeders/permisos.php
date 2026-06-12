<?php

namespace Database\Seeders;

use App\Models\Permisos\PermisoModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class permisos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PermisoModel::create([
            'nombre_permiso' => 'Gestionar Usuarios',
            'slug_permiso' => 'gestionar_usuarios',
            'descripcion_permiso' => 'Permite gestionar los usuarios del sistema, incluyendo la creación, edición y eliminación de usuarios.'
        ]);

        PermisoModel::create([
            'nombre_permiso' => 'Gestionar Productos',
            'slug_permiso' => 'gestionar_productos',
            'descripcion_permiso' => 'Permite gestionar los productos del sistema, incluyendo la creación, edición y eliminación de productos.'
        ]);

        PermisoModel::create([
            'nombre_permiso' => 'Gestionar Compras',
            'slug_permiso' => 'gestionar_compras',
            'descripcion_permiso' => 'Permite gestionar las compras del sistema, incluyendo la creación, edición y eliminación de compras.'
        ]);

        PermisoModel::create([
            'nombre_permiso' => 'Gestionar Inventario',
            'slug_permiso' => 'gestionar_inventario',
            'descripcion_permiso' => 'Permite gestionar el inventario del sistema, incluyendo la creación, edición y eliminación de inventario.'
        ]);

        PermisoModel::create([
            'nombre_permiso' => 'Gestionar Reportes',
            'slug_permiso' => 'gestionar_reportes',
            'descripcion_permiso' => 'Permite gestionar los reportes del sistema, incluyendo la creación, edición y eliminación de reportes.'
        ]);

        PermisoModel::create([
            'nombre_permiso' => 'Gestionar Configuración',
            'slug_permiso' => 'gestionar_configuracion',
            'descripcion_permiso' => 'Permite gestionar la configuración del sistema, incluyendo la creación, edición y eliminación de configuración.'
        ]);

        PermisoModel::create([
            'nombre_permiso' => 'Gestionar Roles',
            'slug_permiso' => 'gestionar_roles',
            'descripcion_permiso' => 'Permite gestionar los roles del sistema, incluyendo la creación, edición y eliminación de roles.'
        ]);
    
        PermisoModel::create([
            'nombre_permiso' => 'Gestionar Ventas',
            'slug_permiso' => 'gestionar_ventas',
            'descripcion_permiso' => 'Permite gestionar las ventas del sistema, incluyendo la creación, edición y eliminación de ventas.'
        ]);
    }
}
