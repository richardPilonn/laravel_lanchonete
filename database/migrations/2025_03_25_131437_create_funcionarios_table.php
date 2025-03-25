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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->nullable(false);
            $table->string('cpf', 14)->nullable(false)->unique(true);
            $table->string('email', 255)->nullable(false)->unique(true);
            $table->string('senha', 255)->nullable(false);
            $table->timestamps();
        });
    }


   // 'nome',
   // 'cpf',
   // 'email',
   // 'senha'
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
