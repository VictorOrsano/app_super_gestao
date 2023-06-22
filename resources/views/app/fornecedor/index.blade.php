@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo') 
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Fornecedor</p>:
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a><li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a><li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%;margin-left: auto; margin-right: auto;"> 
                <hr>
                <h4>formulario de busca</h4>
                <hr>
                <form method="post" action="{{ route ('app.fornecedor.listar')}}">
                @csrf
                    <input type="text" Placeholder="Nome" class="borda-preta">
                    <input type="text" Placeholder="site" class="borda-preta">
                    <input type="text" Placeholder="uf" class="borda-preta">
                    <input type="text" Placeholder="email" class="borda-preta">
                    <button type="submit" class="borda-preta">Pesquisar</button>
                </form>
            </div>
        </div>

    </div>

@endsection