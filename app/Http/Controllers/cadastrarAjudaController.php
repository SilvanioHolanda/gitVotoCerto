<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cadastrarAjudaController extends Controller
{
    public function Ajuda(){
        return view('cadastro-ajuda');
    }

    public function Ajuda_Salvar(Request $request){
        $request->validate([
            'nome_e'        => 'required',
            'descricao'   => 'required',
            'descricao-p' => 'required',
            'valor'       => 'required|integer',
        ]);

        return view ('Tela-inicial');
    } 
}
