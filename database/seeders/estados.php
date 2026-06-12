<?php

namespace Database\Seeders;

use App\Models\Estados\EstadoModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class estados extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstadoModel::create([
            'nombre_estado' => 'Activo',
            'descripcion_estado' => 'El estado activo indica que el elemento está en funcionamiento o disponible.',
            'id_tipo_estado' => 1
        ]);

        EstadoModel::create([
            'nombre_estado' => 'Inactivo',
            'descripcion_estado' => 'El estado inactivo indica que el elemento no está en funcionamiento o no está disponible.',
            'id_tipo_estado' => 1
        ]);
    }
}
