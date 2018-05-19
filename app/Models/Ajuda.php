<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ajuda extends Model
{
    protected $fillable = ['id','nome_e','adesivo','adesivoveicular','descricao','descricao-p','valor'];
}
