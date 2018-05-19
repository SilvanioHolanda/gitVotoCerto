<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Regioes extends Controller
{
    public function pesquisaregioes(){
        return view('pesquisa-regioes');
    }
}
