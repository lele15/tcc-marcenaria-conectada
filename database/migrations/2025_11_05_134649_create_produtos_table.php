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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('descricao');
            $table->float('preco');
            $table->string('foto')->nullable();
            $table->boolean('ativo');
            $table->string('categoria');
            $table->integer('altura');
            $table->integer('largura');
            $table->integer('profundidade');
            $table->unsignedBigInteger('fabricante_id');
            $table->foreign('fabricante_id')->references('id')->on('fabricantes');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
