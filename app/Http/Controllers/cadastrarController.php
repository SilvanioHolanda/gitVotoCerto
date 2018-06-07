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
            'telefone'    => 'required',
            'DataNascimento'    => 'required',
            'tituloeleitor'    => 'required',
            'zona'    => 'required',
            'sessao'    => 'required',
            'cpf'    => 'required',
            'cep'    => 'required',
            'bairro'    => 'required',
            'cidade'    => 'required',
            'uf'    => 'required',
            'numero'    => 'required'
            
        ]);
        $dados = ($request->all());
        if (empty($dados['email'])) unset($dados['email']);
        if (empty($dados['complemento'])) unset($dados['complemento']);
        if (empty($dados['profissao'])) unset($dados['profissao']);
        if (empty($dados['religiao'])) unset($dados['religiao']);
        Eleitor::create($dados);
        return view('Tela-inicial'); 
    }
    public function EleitorListar(Request $request){
       
       $exibirPorPagina = 10;
       $offset = ($exibirPorPagina * ($request->query('page', 1)-1));
       
       if ($request->pesquisar) {
           $paginacao = Eleitor::where('Nome', 'like', $request->pesquisar.'%')->paginate($exibirPorPagina); //10 elementos por página
           $Eleitor = Eleitor::where('Nome', 'like', $request->pesquisar.'%')->limit($exibirPorPagina) // valores devem ser exibido 
                       ->offset($offset) 
                       ->get();
       }  else {
           $paginacao = Eleitor::paginate($exibirPorPagina); 
           $Eleitor = Eleitor::limit($exibirPorPagina)  
                           ->offset($offset)
                           ->get();
       }
        $dados = [
            'Eleitor' => $Eleitor,
            'paginacao'  => $paginacao
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
            'telefone'    => 'required',
            'DataNascimento'    => 'required',
            'tituloeleitor'    => 'required',
            'zona'    => 'required',
            'sessao'    => 'required',
            'cpf'    => 'required',
            'cep'    => 'required',
            'bairro'    => 'required',
            'cidade'    => 'required',
            'uf'    => 'required',
            'numero'    => 'required'
        ]);
             
        Eleitor::where('id',$id)->update($request->all());

        return redirect()->route('EleitorListar');
    }
    public function EleitorExcluir($id)
    {
        Eleitor::destroy($id);
        return redirect()->route('EleitorListar');
             
    }
    public function Graficos()
    {
        // $pastel = Eleitor::select('sexo')->count('id')->where('eleitors.sexo','=','masculino')->orWhere('eleitors.sexo','=','feminino')->groupBy('sexo');


        $pastel = Eleitor::select('sexo')->where('eleitors.sexo','=','masculino')->count();
        $pastel2 = Eleitor::select('sexo')->where('eleitors.sexo','=','feminino')->count();
        $pastel3 = Eleitor::select('estadocivil')->where('eleitors.estadocivil','=','casado')->count();
        $pastel4 = Eleitor::select('estadocivil')->where('eleitors.estadocivil','=','solteiro')->count();
        $pastel5 = Eleitor::select('estadocivil')->where('eleitors.estadocivil','=','viuvo')->count();
        $pastel6 = Eleitor::select('estadocivil')->where('eleitors.estadocivil','=','divorciado')->count();
               // SELECT count(id) as total, sexo FROM eleitors WHERE eleitors.sexo = 'masculino' or eleitors.sexo = 'feminino' GROUP by sexo;


        
        return view('chart',['pastel'=>$pastel,'pastel2'=>$pastel2,'pastel3'=>$pastel3,'pastel4'=>$pastel4,'pastel5'=>$pastel5,'pastel6'=>$pastel6]);

    }

}
