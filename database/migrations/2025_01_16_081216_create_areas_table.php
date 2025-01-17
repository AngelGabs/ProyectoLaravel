<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Nombre del área
            $table->string('descripcion')->nullable(); // Descripción del área
            $table->timestamps();
        });

        // Agregar relación opcional con la tabla 'medicos'
        Schema::table('medicos', function (Blueprint $table) {
            $table->foreignId('area_id')->nullable()->constrained('areas')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Eliminar la relación con 'medicos'
        Schema::table('medicos', function (Blueprint $table) {
            $table->dropForeign(['area_id']);
            $table->dropColumn('area_id');
        });

        // Eliminar la tabla 'areas'
        Schema::dropIfExists('areas');
    }
};
