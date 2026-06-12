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
        Schema::create('presentacion_productos', function (Blueprint $table) {
            $table->id('id_presentacion');
            $table->foreignId('id_producto')->constrained('productos', 'id_producto')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('nombre_presentacion', 150);
            $table->string('codigo_barras', 100)->unique()->nullable();
            $table->string('descripcion_presentacion', 255)->nullable();
            $table->string('contenido', 100);
            $table->string('unidad_medida', 50);
            $table->string('imagen_presentacion', 255)->nullable();
            $table->foreignId('id_estado')->default(1)->constrained('estados', 'id_estado')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presentacion_productos');
    }
};
