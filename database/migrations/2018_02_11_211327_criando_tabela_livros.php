<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriandoTabelaLivros extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('livros', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('isbn');
            $table->string('titulo');
            $table->string('autor');
            $table->text('resumo');
            $table->integer('categoria');
            $table->string('capa')->default('');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
}
