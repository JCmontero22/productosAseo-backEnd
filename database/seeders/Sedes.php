<?php

namespace Database\Seeders;

use App\Models\Sedes\sedeModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Sedes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        sedeModel::create([
            'nombre_sede' => 'Neiva - Canaima',
            'direccion_sede' => 'Calle 25 a sur # 23a - 47, Neiva, Huila',
            'telefono_sede' => '',
            'email_sede' => '',
            'responsable_sede' => 'Diana Manrique',
        ]);
    }
}
