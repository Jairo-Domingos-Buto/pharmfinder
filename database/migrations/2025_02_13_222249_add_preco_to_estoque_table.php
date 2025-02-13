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
        Schema::table('estoque', function (Blueprint $table) {
            $table->decimal('preco', 8, 2)->nullable(); // Exemplo: 99999.99
        });
    }

    public function down()
    {
        Schema::table('estoque', function (Blueprint $table) {
            $table->dropColumn('preco');
        });
    }
};
