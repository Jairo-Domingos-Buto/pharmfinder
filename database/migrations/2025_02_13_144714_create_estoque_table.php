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
        Schema::create('estoque', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmacia_id')->constrained()->onDelete('cascade'); //relacionamento com farmacia
            $table->foreignId('medicamento_id')->constrained()->onDelete('cascade'); //relacionamento com medicamento
            $table->foreignId('quantidade')->default(0);//Quantidade em estoque
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estoque');
    }
};
