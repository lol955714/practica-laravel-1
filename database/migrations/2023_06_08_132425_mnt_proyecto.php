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
        Schema::create('mnt_proyecto', function (Blueprint $table){
            $table->id();
            $table->string('nombre', 250);
            $table->string('codigo', 250);
            $table->string('descripcion', 250);
            $table->string('color', 250);
            $table->string('icono', 250);
            $table->unsignedBigInteger('id_establecimiento');
            $table->unsignedBigInteger('id_fuente_fondos');
            $table->unsignedBigInteger('id_estado_proyecto');
            $table->foreign('id_establecimiento')->references('id')->on('ctl_institucion');
            $table->foreign('id_fuente_fondos')->references('id')->on('ctl_fuente_fondos');
            $table->foreign('id_estado_proyecto')->references('id')->on('ctl_estado_proyecto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mnt_proyecto');
    }
};
