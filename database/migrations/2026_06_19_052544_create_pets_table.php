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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('nomePet');
            $table->string('raca');
            $table->date('dataNascimentoPet');
            $table->string('tipo');
            $table->foreignId('idCliente')->constrained('clientes')->cascadeOnDelete();
            $table->boolean('petAtivo');
            $table->date('dataFalecimento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
