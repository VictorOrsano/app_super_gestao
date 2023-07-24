@extends('app.layouts.basico')

@section('titulo', 'produto')

@section('conteudo') 
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
                 <p>Visualizar Produto</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{route('produto.index')}}">Voltar</a><li>
                <li><a href="">Consulta</a><li>
            </ul>
        </div>

        <div class="informacao-pagina">
            {{ $msg ?? '' }}
            <div style="width: 30%;margin-left: auto; margin-right: auto;">
            <table border="1">
                <thead>
                    <tr>
                        <td>ID:</td>
                        <td>{{ $produto->id }}</td>
                    </tr>

                    <tr>
                        <td>Nome:</td>
                        <td>{{ $produto->nome }}</td>
                    </tr>
                    
                    <tr>
                        <td>Descricao:</td>
                        <td>{{ $produto->descricao }}</td>
                    </tr>

                    <tr>
                        <td>Peso:</td>
                        <td>{{ $produto->peso }}kg</td>
                    </tr>
                    
                    <tr>
                        <td>Unidade de  Medida:</td>
                        <td>{{ $produto->unidade de medida }}</td>
                    </tr>
                    
                </thead>
                <tbody>
                    
                </tbody>
            </table>
            </div>
        </div>

    </div>

@endsection