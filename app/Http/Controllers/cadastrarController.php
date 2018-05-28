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
        $dados = ($request->all());
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
    public function EleitorEditar($id)
    {
     $dados = [
         'Eleitor' => Eleitor::find($id)
     ];
     return view('eleitoreditar', $dados);     
    }
    public function EleitorAtualizar(Request $request, $id)
    {
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
            'numero'    => 'required|integer',
        ]);     
        Eleitor::where('id', $request->$id)->update($request->all());
       
        return redirect()->route('EleitorListar');
    }
    public function EleitorExcluir($id)
    {
        Eleitor::destroy($id);
        return redirect()->route('EleitorListar');
             
    }

}