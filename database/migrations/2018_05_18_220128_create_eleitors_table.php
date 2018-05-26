<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEleitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sexo');
            $table->string('telefone');
            $table->string('DataNascimento');
            $table->string('email')->default('email não fornecido');
            $table->string('estadocivil');
            $table->string('tituloeleitor');
            $table->integer('zona');
            $table->integer('sessao');
            $table->string('cpf');
            $table->string('cep');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf'); 
            $table->string('numero');
            $table->string('complemento')->default('N/A');
            $table->string('profissao')->default('Não Informado');
            $table->string('grauinstrucao');
            $table->string('religiao')->default('Não Informado');
            $table->timestamps();

        });
    }

   
    public function down()
    {
        Schema::dropIfExists('eleitors');
    }
}
