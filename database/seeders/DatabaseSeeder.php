<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(tipos_estados::class);
        $this->call(estados::class);
        $this->call(Sedes::class);
        $this->call(tipos_usuarios::class);
        $this->call(permisos::class);
        $this->call(usuarios::class);
        $this->call(tipos_usuarios_permisos::class);
    }
}
