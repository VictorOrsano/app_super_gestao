@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo') 
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Listagem de Produtos</p>:
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a><li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a><li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 90%;margin-left: auto; margin-right: auto;">
            <table>
                <thead>
                    <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Peso</th>
                    <th>Unidade ID</th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead> 

                <tbody>
                @foreach($produtos as $produto)
                        <tr>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->descricao}}</td>
                            <td>{{$produto->peso}}</td>
                            <td>{{$produto->unidade_id}}</td>
                            <td>Excluir</td>
                            <td><a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a></td>
                            <td><a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}">Excluir</a></td>
                        
                        </tr>
                    @endforeach
                </tbody>
            </table>

            
            {{ $produtos->appends($request)->links() }}
            <!--
            <br>
            {{$produtos->count() }} - Total de registros por página
            <br>
            {{$produtos->total() }} - Total de registros da consulta
            <br>
            {{$produtos->firstItem() }} - Número do primeiro registro da página
            <br>
            {{$produtos->lastItem() }} - Número do último registro da página
            
            -->
            <br>
            Exibindo {{$produtos->count() }} produtos de {{$produtos->total() }} (de {{$produtos->firstItem() }} a {{$fornecedores->lastItem() }})
            </div>
        </div>

    </div>

@endsection