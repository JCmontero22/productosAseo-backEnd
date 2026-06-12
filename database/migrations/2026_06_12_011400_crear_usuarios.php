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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->foreignId('id_tipo_usuario')->constrained('tipos_usuarios', 'id_tipo_usuario')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_sede')->constrained('sedes', 'id_sede')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('nombre_usuario', 150);
            $table->string('user_usuario', 150)->unique();
            $table->string('password_usuario', 150);
            $table->foreignId('id_estado')->constrained('estados', 'id_estado')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamp('fecha_ultima_sesion')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->index('id_tipo_usuario');
            $table->index('id_sede');
            $table->index('id_estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
