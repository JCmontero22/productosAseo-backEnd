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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('id_venta');
            $table->foreignId('id_cliente')->constrained('clientes', 'id_cliente')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_usuario')->constrained('usuarios', 'id_usuario')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_sede')->constrained('sedes', 'id_sede')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('numero_factura', 100)->unique()->nullable();
            $table->foreignId('id_tipo_pago')->constrained('tipos_pagos', 'id_tipo_pago')->cascadeOnUpdate()->restrictOnDelete();
            $table->decimal('total_venta', 10, 2);
            $table->date('fecha_venta');
            $table->foreignId('id_estado')->default(1)->constrained('estados', 'id_estado')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
