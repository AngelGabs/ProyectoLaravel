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
        Schema::table('pacientes', function (Blueprint $table) {
            // Añadir la columna 'imagen' para almacenar la ruta de la imagen
            $table->string('imagen')->nullable(); // Se establece como nullable por si no se agrega imagen
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pacientes', function (Blueprint $table) {
            // Eliminar la columna 'imagen' en caso de revertir la migración
            $table->dropColumn('imagen');
        });
    }
};
