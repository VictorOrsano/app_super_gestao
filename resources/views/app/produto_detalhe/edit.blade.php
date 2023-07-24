@extends('app.layouts.basico')

@section('titulo', 'Detalhes do produto')

@section('conteudo') 
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
                 <p>editar Detalhes do Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="#">Voltar</a><li>
            </ul>
        </div>

        <div class="informacao-pagina">
            {{ $produto_detalhe->Json() }}
            <h4>Produto</h4>
            <div>{{ $produto_detalhe->item->nome}}</div>
            <br>
            <div>{{ $produto_detalhe->item->descricao}}</div>
            <br>

            <div>Descricao: {{ 'recuperar a descricao do produto' }}</div>
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('app.produto_detalhe._components.form_create_edit', 
                ['produto_detalhe' => $produto_detalhe, 'unidades' => $unidades])
                @endcomponent
            </div>
        </div>

    </div>

@endsection