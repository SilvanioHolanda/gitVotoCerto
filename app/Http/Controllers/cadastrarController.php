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
            'sexo'    =>'required',
            'telefone'    => 'required|integer',
            'DataNascimento'    => 'required',
            'tituloeleitor'    => 'required',
            'zona'    => 'required',
            'sessao'    => 'required',
            'cpf'    => 'required',
            'cep'    => 'required',
            'bairro'    => 'required',
            'cidade'    => 'required',
            'uf'    => 'required',
            'numero'    => 'required|integer'
            
        ]);
        $dados = $request->all();
        if (empty($dados['email'])) unset($dados['email']);
        if (empty($dados['complemento'])) unset($dados['complemento']);
        if (empty($dados['profissao'])) unset($dados['profissao']);
        if (empty($dados['religiao'])) unset($dados['religiao']);
        Eleitor::create($dados);
        return view('Tela-inicial'); 
    }
    public function EleitorListar(){
        $dados = [
            'Eleitor' => Eleitor::all()
        ];
        return view('listareleitores', $dados);
    }
    public function EleitorVisualisar($id)
    {
        $dados = [
            'Eleitor' => Eleitor::find($id)
        ];
        return view('eleitorvisualisar', $dados);     
    }

}
 