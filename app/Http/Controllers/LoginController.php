<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller{

    public function Logar(Request $buscar) {
        if ($buscar->nome == 'admin' && $buscar->senha == '123') {
            
            return redirect()->route('TelaInicial');
        }
        return redirect()->route('home')->with('erro', 'Senha ou Login inválido');
    }

    public function Logout()
    {
        return view('home');
    }

    public function Tela()
    {
       return view('Tela-inicial');
    }


}
