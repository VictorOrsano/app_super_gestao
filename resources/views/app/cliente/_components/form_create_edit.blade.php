@if(isset($Cliente->id))
<form method="post" action="{{ route('Cliente.update', ['cliente' => $cliente->id]) }}">
    @csrf
    @method('PUT')
@else
    <form method="post" action="{{ route('cliente.store') }}">
        @csrf
@endif

    <input type="text" name="nome" value="{{ $Cliente->nome ?? old('nome') }}" placeholder="nome" class="borda-preta">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
     
    <button type="submit" class="borda-preta">Cadastrar</button>
</form>