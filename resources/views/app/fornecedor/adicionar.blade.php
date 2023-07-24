@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            @if(isset($fornecedor->id))
                <p>Fornecedor - Editar</p>
            @else
                <p>Fornecedor - Adicionar</p>
            @endif
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('app.fornecedor.adicionar') }}">Novo</a><li>
                <li><a href="{{ route('app.fornecedor') }}">Consulta</a><li>
            </ul>
        </div>

        <div class="informacao-pagina">
            {{ $msg ?? '' }}
            <div style="width: 30%;margin-left: auto; margin-right: auto;">
                <form method="post" action="{{ route('app.fornecedor.adicionar') }}">
                    <input type="hidden" name="id" value="{{ $fornecedor->id ?? '' }}">
                    @csrf
                    <input type="text" name="nome" value="{{ $fornecedor->nome ?? old('nome')}}" Placeholder="nome" class="borda-preta">
                    {{ $errors->has('nome') ? $errors->first('nome') : ''}}

                    <input type="text" name="site" value="{{ $fornecedor->site ?? old('site')}}"Placeholder="site" class="borda-preta">
                    {{ $errors->has('site') ? $errors->first('site') : ''}}

                    <input type="text" name="uf" value="{{ $fornecedor->uf ?? old('uf')}}"Placeholder="uf" class="borda-preta">
                    {{ $errors->has('uf') ? $errors->first('uf') : ''}}

                    <input type="text" name="email" value="{{ $fornecedor->email ?? old('email')}}" Placeholder="email" class="borda-preta">
                    {{ $errors->has('email') ? $errors->first('email') : ''}}

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>

    </div>

@endsection
