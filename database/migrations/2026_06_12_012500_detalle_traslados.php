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
        Schema::create('detalle_traslados', function (Blueprint $table) {
            $table->id('id_detalle_traslado');
            $table->foreignId('id_traslado')->constrained('traslados', 'id_traslado')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_presentacion')->constrained('presentacion_productos', 'id_presentacion')->cascadeOnUpdate()->restrictOnDelete();
            $table->integer('cantidad_traslado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_traslados');
    }
};
