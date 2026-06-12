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
        Schema::create('precios_sedes_presentaciones', function (Blueprint $table) {
            $table->id('id_precio_sede_presentacion');
            $table->foreignId('id_sede')->constrained('sedes', 'id_sede')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_presentacion')->constrained('presentacion_productos', 'id_presentacion')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_tipo_precio')->constrained('tipos_precios', 'id_tipo_precio')->cascadeOnUpdate()->restrictOnDelete();
            $table->decimal('precio', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('precios_sedes_presentaciones');
    }
};
