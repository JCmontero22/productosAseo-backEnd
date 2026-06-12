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
        Schema::create('tipos_movimientos_inventario', function (Blueprint $table) {
            $table->id('id_tipo_movimiento');
            $table->string('nombre_tipo_movimiento', 150);
            $table->string('descripcion_tipo_movimiento', 255)->nullable();
            $table->foreignId('id_estado')->constrained('estados', 'id_estado')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_movimientos_inventario');
    }
};
