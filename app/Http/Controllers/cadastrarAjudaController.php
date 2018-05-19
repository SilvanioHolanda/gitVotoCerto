<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ajuda;

class cadastrarAjudaController extends Controller
{
    public function Ajuda(){
        return view('cadastro-ajuda');
    }

    public function Ajuda_Salvar(Request $request){
        $request->validate([
            'nome_e'        => 'required',
            'descricao'   => 'required',        
            'valor'       => 'required|integer',
        ]);
        
        $dados = $request->all();
        if (empty($dados['descricao-p'])) unset($dados['descricao-p']);
       Ajuda::create($dados);

        return view ('Tela-inicial');
    } 
}
