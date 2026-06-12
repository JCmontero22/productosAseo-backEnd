<?php

namespace Database\Seeders;

use App\Models\Estados\TipoEstadoModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipos_estados extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        TipoEstadoModel::create([
            'nombre_tipo_estado' => 'General',
            'descripcion_tipo_estado' => 'Los estados generales.'
        ]);

        TipoEstadoModel::create([
            'nombre_tipo_estado' => 'Productos',
            'descripcion_tipo_estado' => 'Los estados para los productos.'
        ]);

    }
}
