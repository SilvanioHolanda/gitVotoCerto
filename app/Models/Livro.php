<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model {
    
    protected $fillable = ['isbn', 'titulo', 'autor', 'resumo', 'categoria'];
}
