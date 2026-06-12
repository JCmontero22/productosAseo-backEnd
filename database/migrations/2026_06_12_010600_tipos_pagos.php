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
        Schema::create('tipos_pagos', function (Blueprint $table) {
            $table->id('id_tipo_pago');
            $table->string('nombre_tipo_pago', 150);
            $table->string('descripcion_tipo_pago', 255)->nullable();
            $table->foreignId('id_estado')->default(1)->constrained('estados', 'id_estado')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_pagos');
    }
};
