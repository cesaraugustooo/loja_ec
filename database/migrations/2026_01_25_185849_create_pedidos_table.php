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
            $table->integer('quantidade');
            $table->float('preco');
            $table->enum('status', ['aguardando','pago', 'enviado','cancelado'])->default('aguardando');
            $table->enum('atividade', ['ativo','inativo'])->default('ativo');
            $table->foreignId('user_id');
            $table->foreignId('produtos_id');
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
