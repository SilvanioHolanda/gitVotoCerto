<?php

namespace App\Http\Controllers;
use Session;

use Illuminate\Http\Request;

class LoginController extends Controller{

    public function Logar(Request $buscar) {
        if ($buscar->nome == 'admin' && $buscar->senha == '123') {
            session(['usuario' => 'Silvanio']);
            return redirect()->route('TelaInicial');
        }
        return redirect()->route('home')->with('erro', 'Senha ou Login inválido');
    }

    public function Logout(Request $request)
    {
        Session::flush();
        return view('home');
        

    }

    public function Tela()
    {
       return view('Tela-inicial');
    }


}
