<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleitor extends Model
{
    protected $fillable = ['id','nome','sexo','telefone','DataNascimento','email','estadocivil','tituloeleitor','zona','sessao','cpf','cep','bairro','cidade','uf','numero','complemento','profissao','grauinstrucao','religiao'];
}
