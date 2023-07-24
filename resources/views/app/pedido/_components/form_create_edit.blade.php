@if(isset($Pedido->id))
<form method="post" action="{{ route('pedido.update') }}">
    @csrf
    @method('PUT')
@else
    <form method="post" action="{{ route('pedido.store') }}">
        @csrf
@endif

<select name="cliente_id">
    <option>--Selecione um cliente --</option>

    @foreach($clientes as $cliente)
        <option value="{{ $cliente->id }}"{{ $produto->cliente_id ?? old('cliente_id') == $cliente->id ? 'selected' : ''}}>{{ $cliente->nome }}</option>
    @endforeach
</select>
{{ $errors->has('cliente_id') ? $errors->first('cliente_id') : '' }}

    <input type="text" name="nome" value="{{ $Pedido->nome ?? old('nome') }}" Placeholder="nome" class="borda-preta">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}

    <button type="submit" class="borda-preta">Cadastrar</button>
</form>
