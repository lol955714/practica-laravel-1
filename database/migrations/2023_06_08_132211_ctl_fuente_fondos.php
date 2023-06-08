<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ctl_fuente_fondos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 250);
            $table->string('codigo', 250);
            $table->string('descripcion', 250);
            $table->string('color', 250);
            $table->string('icono', 250);
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public
    function down(): void
    {
        Schema::dropIfExists('ctl_fuente_fondos');
    }
};
