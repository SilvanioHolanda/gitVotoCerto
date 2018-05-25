<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleitor;

class cadastrarController extends Controller{

    public function Eleitor(){  
     return view('cadastrar-eleitor');
    }

    public function Salvar(Request $request){
        $request->validate([
            'nome'    => 'required',
            'telefone'    => 'required|integer',
            'DataNascimento'    => 'required',
            'email'    => 'required|email',
            'tituloeleitor'    => 'required',
            'zona'    => 'required',
            'sessao'    => 'required',
            'cpf'    => 'required',
            'cep'    => 'required',
            'bairro'    => 'required',
            'cidade'    => 'required',
            'uf'    => 'required',
            'numero'    => 'required|integer',
            'complemento'    => 'required',
            'profissao'    => 'required',
            'religiao'    => 'required'
            
        ]);
        
        return view('Tela-inicial'); 
    }
    public function EleitorListar(){
        $dados = [
            'Eleitor' => Eleitor::all()
        ];
        return view('listareleitores', $dados);
    }

}
 