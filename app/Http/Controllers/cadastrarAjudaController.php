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

    public function AjudaListar(){
        $dados = [
            'Ajudas' => Ajuda::all()
        ];
        return view('listarajudas', $dados);
    }
    public function AjudaVisualisar($id)
    {
        $dados = [
            'Ajuda' => Ajuda::find($id)
        ];
        return view('ajudavisualisar', $dados);     
    }
    public function AjudaEditar($id)
    {
     $dados = [
         'Ajuda' => Ajuda::find($id)
     ];
     return view('editarajuda', $dados);     
    }
    public function AjudaAtualizar(Request $request)
    {
        $request->validate([
            'nome_e'      => 'required',
            'descricao'   => 'required',        
            'valor'       => 'required|integer',
        ]);
        echo $request->id;
        Ajuda::where('id', $request->id)->update($request->all());
       
        return redirect()->route('AjudaListar');
    }
    public function AjudaExcluir($id)
    {
        Ajuda::destroy($id);
        return redirect()->route('AjudaListar');
             
    }
}
