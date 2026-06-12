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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->foreignId('id_categoria')->constrained('categorias', 'id_categoria')->cascadeOnUpdate()->restrictOnDelete();
            $table->string('nombre_producto', 150);
            $table->string('codigo_producto', 100)->unique();
            $table->string('descripcion_producto', 255)->nullable();
            $table->string('imagen_producto', 255)->nullable();
            $table->foreignId('id_estado')->constrained('estados', 'id_estado')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
