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
        Schema::create('tipos_movimientos', function (Blueprint $table) {
            $table->id('id_tipo_movimiento');
            $table->string('nombre_tipo_movimiento', 150);
            $table->string('descripcion_tipo_movimiento', 255)->nullable();
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_movimientos');
    }
};
