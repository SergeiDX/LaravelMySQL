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
        Schema::create('plataformas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_plataforma');
            $table->string('fabricante');
            $table->foreignId('id_videojuego')->nullable()->constrained('videojuegos')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('id_usuario')->nullable()->constrained('usuarios')->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plataformas');
    }
};
