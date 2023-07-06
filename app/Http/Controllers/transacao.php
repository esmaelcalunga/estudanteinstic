<?php

namespace App\Http\Controllers;

use App\Models\Transacoes;
use Illuminate\Http\Request;

class transacao extends Controller
{
   

    public function index()
        {
            $dados = Transacoes::all();  
 
            return view('home', ['dados' => $dados]);
        }


        public function cadastrar(Request $dados)
        {
            Transacoes::create([
                'descricao'  => $dados->descricao,
                'valor'  => $dados->valor,
                'tipo'  => $dados->tipo
             ]); 

             return redirect()->route('home');
        
        }


        public function mostrarUmRegisto($idtransacao)
        {
            $transacao = Transacoes::findOrFail($idtransacao);
            return view('editar', ['transacao'=>$transacao]);

             
        
        }


        public function editarregisto(Request $dados, $id)
        {
            $transacao = Transacoes::findOrFail($id);
            $transacao->descricao=$dados->descricao;
            $transacao->tipo=$dados->tipo;
            $transacao->valor=$dados->valor;
        
            $transacao -> save();
            
            return redirect()->route('home');

             
        
        }


}
