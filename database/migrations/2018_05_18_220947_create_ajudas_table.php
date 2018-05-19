<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAjudasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ajudas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_e');
            $table->string('adesivo');
            $table->string('adesivoveicular');  
            $table->string('descricao');
            $table->string('descricao-p')->default('nenhuma pendencia');
            $table->integer('valor');
            $table->timestamps();
         
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('ajudas');
    }
}
