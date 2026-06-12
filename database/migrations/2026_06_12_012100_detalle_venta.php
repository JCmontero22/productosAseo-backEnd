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
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->id('id_detalle_venta');
            $table->foreignId('id_venta')->constrained('ventas', 'id_venta')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_presentacion')->constrained('presentacion_productos', 'id_presentacion')->cascadeOnUpdate()->restrictOnDelete();
            $table->integer('cantidad_venta');
            $table->decimal('precio_unitario', 10, 2);
            $table->decimal('ganancia_unitaria', 10, 2);
            $table->decimal('subtotal_venta', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_venta');
    }
};
