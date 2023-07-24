<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Produto;
use App\PedidoProduto;

class PedidoProdutoController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index(Request $request)
        {
            $pedidos = Pedido::paginate(10);
            return view('app.pedido.index', ['pedidos' => $pedidos, 'request' => $request->all()]);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create(Pedido $pedido)
        {
            $produtos = Produto::all();
            //$pedido->produtos; //eager loading
            return view('app.pedido_produto.create', ['pedido' => $pedido, 'produtos' => $produtos]);
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request, Pedido $pedido)
        // {
        //     $regras = [
        //         'cliente_id' => 'existe:clientes,id'
        //     ];
        //     $feedback = [
        //         'cliente_id.exists' => 'O cliente informado não existe'
        //     ];

        //     $request->validate($regras, $feedback);

        //     $pedido = new Pedido();
        //     $pedido->cliente_id = $request->get('cliente_id');
        //     $pedido->save();

        //     return redirect()->route('pedido.index');
        //     }

        {
            $regras = [
                'produto_id' => 'exists:produtos,id',
                'quantidade' => 'required'
            ];

            $feedback =[
                'produto_id.exists' => 'O produto informado não existe',
                'required' => 'O campo :atribute deve um valor válido'
            ];

            $request->validate($regras, $feedback);

            //  $pedidoProduto = new PedidoProduto();
            //  $pedidoProduto->pedido_id = $pedidoProduto->id;
            //  $pedidoProduto->produto_id = $request->get('produto_id');
            //  $pedidoProduto->quantidade = $request->get('quantidade');
            //  $pedidoProduto->save();


          //$pedido->produtos; //os regristros do relacionamento
           /*
            $pedido->produtos()->attach(
                $request->get('produto_id'),
                [
                    'quantidade' => $request->get('quantidade'),
                    'coluna_1' => '',
                    'coluna_2' => '',

                ]
            ); // objeto
            //pedido_id
            */

            $pedido->produtos()->attach([
                $request->get('produto_id') => ['quantidade' => $request->get('quantidade')]

            ]);

            return redirect()->route('pedido-produto.create', ['pedido' => $pedido->id]);
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int PedidoProduto $id
         * @return \Illuminate\Http\Response
         */
        //public function destroy(Pedido $pedido, Produto $produto)
        public function destroy(PedidoProduto $pedidoProduto, $pedido_id)

        {

            $pedidoProduto->delete();

            return redirect()->route('pedido-produto.create', ['pedidoProduto' =>$pedidoProduto, 'pedido' => $pedido_id]);
        }
}
