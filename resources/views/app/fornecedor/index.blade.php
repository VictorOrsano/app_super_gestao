<h3>fornecedor</h3>

@php
   /*
   if(empty{$variavel}) {} //retornar true se a variavel estiver vazia
   -''
   -0
   -0.0
   -'0'
   -null
   -false
   -array
   -$var
    */
@endphp

@isset(fornecedores)


        @forelse($fornecedores as $indice => $fornecedor)
            Iteração atual:{{ $loop->iteration }}
            <br>
            Fornecedor: {{ $fornecedor['nome'] }}
            <br>
            Status: {{ $fornecedor['status'] }}
            <br>
            CNPJ; {{ $fornecedor['cnpj'] ?? ''}}
            <br>
            Telefone: ({{ $fornecedor[''ddd''] ?? ''}}) {{ $fornecedores[0]['cnpj'] ?? ''}}
            <br>
            @if($loop-> first)
                primeira iteracao
            @endif
             @if($loop-> last)
                Ultima iteracao do logo
            @endif 

            <hr>

            |@if($loop->first)
                primeira iteração do Loop
            @endif
            @if($loop->last)
                Ultima iteracao do loop

                <br>
                Total de registros{{ $loop->count}}

            @endif
                <hr>
            @empty
                Não existem fornecedores cadastrados!!!
        @endforeelse 
    @endisset

