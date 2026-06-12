<?php

namespace Database\Seeders;

use App\Models\Usuarios\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class usuarios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'id_tipo_usuario' => 1,
            'id_sede' => 1,
            'nombre_usuario' => 'Admin',
            'user_usuario' => 'admin',
            'password_usuario' => bcrypt('admin123'),
            'id_estado' => 1,
        ]);
    }
}
