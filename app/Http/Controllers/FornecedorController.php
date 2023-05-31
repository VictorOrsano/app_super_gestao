<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 =>['nome' =>'Fornecedores 1',
            'status' =>'N',
            'cnpj' =>'0',
            'ddd' => '11',//São Paulo (SP)
            'telefone' => '0000-0000'
        ],
            1 =>[
                'nome' =>'Fornecedores 2',
            'status' =>'S',
            'cnpj' =>null,
            'ddd' => '85',//Fortaleza(CE)
            'telefone' => '0000-0000'
            ],
            2 =>[
                'nome' =>'Fornecedores 3',
            'status' =>'S',
            'cnpj' =>null,
            'ddd' => '32', //Juiz de Fora(MG)
            'telefone' => '0000-0000'
            ]
        ]; 

        /*
        condicao? se verdade : se falso;
        condicao? se verdade :(condicao? se verdade : se falso);
        */
        $msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ infomado' : 'CNJP nao informado';
        echo$msg;
       return view('app.fornecedor.index', compact('fornecedores'));
    }
}
