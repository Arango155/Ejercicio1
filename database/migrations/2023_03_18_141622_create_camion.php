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
        Schema::create('camion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transporte_codigo')->constrained('transporte');
            $table->integer('id_placa');
            $table->String('placa_camion',6);
            $table->String('marca',45);
            $table->String('color',25);
            $table->Date('modelo');
            $table->integer('capacidad_toneladas');
            $table->String('transporte_codigo',45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camion');
    }
};
