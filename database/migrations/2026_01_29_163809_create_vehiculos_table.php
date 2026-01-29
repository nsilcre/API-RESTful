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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->string('matricula', 8)->primary();
            $table->string('marca');
            $table->string('modelo');
            $table->date('anio_fabricacion');
            $table->enum('disponibilidad', ['si', 'no']);
            $table->enum('combustible', ['hibrido', 'diesel', 'gasolina', 'electrico']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
