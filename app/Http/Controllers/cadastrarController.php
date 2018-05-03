<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'cpf'    => 'required',
            'cep'    => 'required',
            'bairro'    => 'required',
            'cidade'    => 'required',
            'uf'    => 'required',
            'numero'    => 'required|integer',
            'complemento'    => 'required',
            'profissao'    => 'required',
            'religiao'    => 'required',
            'nomedependente'    => 'required',
            
        ]);
        
        return view('Tela-inicial'); 
    }
}
 