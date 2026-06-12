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
        Schema::create('movimientos_financieros', function (Blueprint $table) {
            $table->id('id_movimiento_financiero');
            $table->foreignId('id_tipo_movimiento')->constrained('tipos_movimientos', 'id_tipo_movimiento')->cascadeOnUpdate()->restrictOnDelete();
            $table->decimal('monto', 10, 2);
            $table->string('descripcion_movimiento', 255)->nullable();
            $table->foreignId('id_usuario')->constrained('usuarios', 'id_usuario')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_sede')->constrained('sedes', 'id_sede')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreignId('id_estado')->constrained('estados', 'id_estado')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos_financieros');
    }
};
