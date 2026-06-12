<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipo_usuario_permisos', function (Blueprint $table) {
            $table->id('id_tipo_usuario_permiso');
            $table->foreignId('id_tipo_usuario')->constrained('tipos_usuarios', 'id_tipo_usuario')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_permiso')->constrained('permisos', 'id_permiso')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_usuario_permisos');
    }
};
