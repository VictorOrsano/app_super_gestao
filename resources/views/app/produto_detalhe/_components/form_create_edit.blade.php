@if(isset($produto_detalhe->id))
<form method="post" action="{{ route('produto-detalhe.update') }}">
    @csrf
    @method('PUT')
@else
    <form method="post" action="{{ route('produto-detalhe.store') }}">
        @csrf
@endif
    <input type="text" name="produto_id" value="{{ $produto_detalhe-> produto_id ?? old('produto_id') }}" Placeholder="ID do Produto" class="borda-preta">
    {{ $errors->has('produto_id')? $errors->first('produto_id') : '' }}

    <input type="text" name="comprimento" value="{{  $produto_detalhe->comprimento ?? old('comprimento') }}"Placeholder="Comprimento" class="borda-preta">
    {{ $errors->has('comprimento')? $errors->first('comprimento') : '' }}

    <input type="text" name="largura" value="{{ $produto_detalhe->largura ?? old('largura') }}"Placeholder="Largura" class="borda-preta">
    {{ $errors->has('largura')? $errors->first('largura') : '' }}

    <input type="text" name="altura" value="{{ $produto_detalhe->altura ?? old('altura') }}"Placeholder="Altura" class="borda-preta">
    {{ $errors->has('altura')? $errors->first('altura') : '' }}

<select name="unidade_id">
    <option>--Selecione a Unidade de Medida --</option>

    @foreach($unidade as unidade)
        <option value="{{ $unidade->id }}"{{ $produto_detalhe->unidade_id ?? old('unidade_id') == $unidade->id ? 'selected' : ''}}>{{ $unidade->descricao }}</option>
    @endforeach
    </select>
    {{ errors->has('unidade_id')? $errors->first('unidade_id') : '' }}

    <button type="submit" class="borda-preta">Cadastrar</button>
</form>
