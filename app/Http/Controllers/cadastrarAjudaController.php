<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ajuda;
use App\Models\Eleitor;

class cadastrarAjudaController extends Controller
{
    public function Ajuda(){
        $dados = [           
            'eleitores'  => Eleitor::all(),
        ]; 
        return view('Cadastro-ajuda', $dados);
    }

    public function Ajuda_Salvar(Request $request){
        $request->validate([
            'nome_e'        => 'required',
            'descricao'   => 'required',        
            'valor'       => 'required|integer',
        ]);

        
       Ajuda::create($request->all());

        return view ('Tela-inicial');
    } 

    public function AjudaListar(Request $request){

       $exibirPorPagina = 10;
       $offset = ($exibirPorPagina * ($request->query('page', 1)-1));
       
       if ($request->pesquisar) {
           $paginacao = Ajuda::where('nome_e', 'like', $request->pesquisar.'%')->paginate($exibirPorPagina); //Exibe 5 elementos por página
           $Ajudas = Ajuda::where('nome_e', 'like', $request->pesquisar.'%')->limit($exibirPorPagina) //Quantos valores devem ser exibido 
                       ->offset($offset) //Começa a exibir a apartir de qual valor
                       ->get();
       }  else {
           $paginacao = Ajuda::paginate($exibirPorPagina); //Exibe 5 elementos por página
           $Ajudas = Ajuda::limit($exibirPorPagina) //Quantos valores devem ser exibido 
                           ->offset($offset) //Começa a exibir a apartir de qual valor::all();
                           ->get();
       }
        $dados = [
            'Ajudas' => $Ajudas,
            'paginacao'  => $paginacao
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
    public function AjudaAtualizar(Request $request, $id)
    {
        $request->validate([
            'nome_e'      => 'required',
            'descricao'   => 'required',        
            'valor'       => 'required|integer',
        ]);
        
        Ajuda::where('id', $request->id)->update($request->all());
       
        return redirect()->route('AjudaListar');
    }
    public function AjudaExcluir($id)
    {
        Ajuda::destroy($id);
        return redirect()->route('AjudaListar');
             
    }
}
