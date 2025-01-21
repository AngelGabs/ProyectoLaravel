<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('citas', function (Blueprint $table) {
            $table->date('fecha_cita')->nullable()->change();
            $table->time('hora_cita')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('citas', function (Blueprint $table) {
            $table->date('fecha_cita')->nullable(false)->change();
            $table->time('hora_cita')->nullable(false)->change();
        });
    }
};
