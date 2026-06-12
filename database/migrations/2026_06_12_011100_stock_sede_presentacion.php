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
        Schema::create('stock_sede_presentacion', function (Blueprint $table) {
            $table->id('id_stock_sede_presentacion');
            $table->foreignId('id_sede')->constrained('sedes', 'id_sede')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_presentacion')->constrained('presentacion_productos', 'id_presentacion')->cascadeOnUpdate()->restrictOnDelete();
            $table->integer('cantidad_actual');
            $table->decimal('costo_promedio_actual', 10, 2);
            $table->integer('stock_minimo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_sede_presentacion');
    }
};
