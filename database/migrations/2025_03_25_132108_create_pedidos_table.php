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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cliente_id')->unsigned()->nullable(false);
            $table->dateTime('data_hora')->nullable(false);
            $table->decimal('valor_total', 15,2)->nullable(false);
            $table->decimal('valor_desconto', 15,2)->nullable(false);
            $table->string('forma_pagamento', 100)->nullable(false);
            $table->string('status')->default('Em Aberto');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
