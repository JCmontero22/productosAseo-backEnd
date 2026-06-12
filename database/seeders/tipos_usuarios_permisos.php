<?php

namespace Database\Seeders;

use App\Models\Permisos\tipoUsuarioPermiso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipos_usuarios_permisos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tipoUsuarioPermiso::create([
            'id_tipo_usuario' => 1, // Administrador
            'id_permiso' => 1, // Permiso para gestionar usuarios
        ]);

        tipoUsuarioPermiso::create([
            'id_tipo_usuario' => 1, // Administrador
            'id_permiso' => 2, // Permiso para gestionar productos
        ]);

        tipoUsuarioPermiso::create([
            'id_tipo_usuario' => 1, // Administrador
            'id_permiso' => 3, // Permiso para gestionar roles
        ]);

        tipoUsuarioPermiso::create([
            'id_tipo_usuario' => 1, // Administrador
            'id_permiso' => 4, // Permiso para gestionar compras
        ]);

        tipoUsuarioPermiso::create([
            'id_tipo_usuario' => 1, // Administrador
            'id_permiso' => 5, // Permiso para gestionar inventario
        ]);

        tipoUsuarioPermiso::create([
            'id_tipo_usuario' => 1, // Administrador
            'id_permiso' => 6, // Permiso para gestionar reportes
        ]);

        tipoUsuarioPermiso::create([
            'id_tipo_usuario' => 1, // Administrador
            'id_permiso' => 7, // Permiso para gestionar configuración
        ]);

        tipoUsuarioPermiso::create([
            'id_tipo_usuario' => 1, // Administrador
            'id_permiso' => 8, // Permiso para gestionar ventas
        ]);
    }
}
