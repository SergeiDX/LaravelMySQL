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
        Schema::create('contratos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion_contrato');
            $table->date('fecha_inicio');
            $table->date('fecha_limite');
            $table->foreignId('id_desarrollador')->nullable()->constrained('desarrolladores')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('id_empresa')->nullable()->constrained('empresas')->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
