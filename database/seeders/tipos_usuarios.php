<?php

namespace Database\Seeders;

use App\Models\Usuarios\TipoUsuariosModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipos_usuarios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoUsuariosModel::create([
            'nombre_tipo_usuario' => 'Administrador',
            'descripcion_tipo_usuario' => 'El administrador tiene acceso completo a todas las funciones y configuraciones del sistema.'
        ]);

        TipoUsuariosModel::create([
            'nombre_tipo_usuario' => 'Vendedor',
            'descripcion_tipo_usuario' => 'El vendedor tiene acceso limitado a ciertas funciones y configuraciones del sistema.'
        ]);
    }
}
