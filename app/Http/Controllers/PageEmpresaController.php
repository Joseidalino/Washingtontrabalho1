<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageEmpresaController extends Controller
{
    public function homepage(){
        return view('homepage'); 
    }

    public function contato(){
        $dado = "blog@blog.com";
        $telefone = 37410012;
        //chamando a view e passando um dado
        //passa p/ view o nome da variavel , valor  
        return view('contato')->with('email', $dado)
        ->with('telefone', $telefone); 
        //OU ->withEmail($dado);
    }
    public function login(){
        return view('login');
    }
    public function fazlogin(){
        return view('fazlogin');
    }
}
