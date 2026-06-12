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
        Schema::create('compras', function (Blueprint $table) {
            $table->id('id_compra');
            $table->foreignId('id_proveedor')->constrained('proveedores', 'id_proveedor')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_sede')->constrained('sedes', 'id_sede')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_tipo_pago')->constrained('tipos_pagos', 'id_tipo_pago')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('numero_factura', 100)->unique();
            $table->decimal('total_compra', 10, 2);
            $table->date('fecha_compra');
            $table->foreignId('id_usuario')->constrained('usuarios', 'id_usuario')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_estado')->constrained('estados', 'id_estado')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
