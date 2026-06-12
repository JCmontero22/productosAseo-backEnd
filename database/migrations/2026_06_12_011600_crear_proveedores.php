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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('id_proveedor');
            $table->string('nombre_proveedor', 150);
            $table->string('contacto_proveedor', 150)->nullable();
            $table->string('telefono_proveedor', 20)->nullable();
            $table->string('email_proveedor', 150)->nullable();
            $table->string('direccion_proveedor', 255)->nullable();
            $table->foreignId('id_estado')->constrained('estados', 'id_estado')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
