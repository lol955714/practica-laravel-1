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
        Schema::create('ctl_institucion', function (Blueprint $table){
            $table->id();
            $table->string('nombre', 250);
            $table->string('codigo', 250);
            $table->string('direccion', 250);
            $table->string('telefono', 250);
            $table->string('email', 250);
            $table->string('color', 250);
            $table->boolean('estado')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ctl_institucion');
    }
};
