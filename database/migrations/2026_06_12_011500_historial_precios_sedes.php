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
        Schema::create('historial_precios_sedes', function (Blueprint $table) {
            $table->id('id_historial_precio_sede');
            $table->foreignId('id_sede')->constrained('sedes', 'id_sede')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_presentacion')->constrained('presentacion_productos', 'id_presentacion')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_tipo_precio')->constrained('tipos_precios', 'id_tipo_precio')->cascadeOnUpdate()->restrictOnDelete();
            $table->decimal('precio_anterior', 10, 2);
            $table->decimal('precio_nuevo', 10, 2);
            $table->timestamp('fecha_cambio');
            $table->foreignId('id_usuario')->constrained('usuarios', 'id_usuario')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_precios_sedes');
    }
};
