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
        Schema::create('sedes', function (Blueprint $table) {
            $table->id('id_sede');
            $table->string('nombre_sede', 150);
            $table->string('direccion_sede', 255)->nullable();
            $table->string('telefono_sede', 20)->nullable();
            $table->string('email_sede', 150)->nullable();
            $table->string('responsable_sede', 150)->nullable();
            $table->foreignId('id_estado')->constrained('estados', 'id_estado')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sedes');
    }
};
