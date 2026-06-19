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
        Schema::create('prontuarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idPet')->constrained('pets')->cascadeOnDelete();
            $table->decimal('pesoPet', 8,3);
            $table->string('descricao');
            $table->string('estadoPet');
            $table->timestamps();


            /*
                    use HasFactory;
    protected $fillable = [
        'id', 
        'idPet', 
        'pesoPet', 
        'descricao', 
        'estadoPet', 
    ];
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prontuarios');
    }
};
