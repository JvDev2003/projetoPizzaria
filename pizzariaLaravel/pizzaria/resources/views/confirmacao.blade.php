@extends('app')

@section('content')

@php
    $valorTotal = 0;
    function trataString($string){
        return preg_replace('/_/', " ", $string);
    }
@endphp

<section class="confirmacao">
    <form method="post" action="./cardapio">
        @csrf
        <ul>
            <h1>Pedido</h1>
            <p>Sabor<span>Valor</span></p>
            
            @foreach($pedido as $key => $ped)

            @php
                $valorTotal+=$valores["{$key}Valor"]*$ped;
            @endphp
            <li>
                <div class="descricao-pedido">
                    <input type="hidden" name="{{ trataString($key) }}" id="{{ trataString($key) }}" value="{{ trataString($ped) }}">
                    <p>{{ trataString($ped) }} X {{ trataString($key) }} <span>R${{ $valores["{$key}Valor"]*$ped }},00</span></p>
                </div>
            </li>
            @endforeach
            <p id="total">Valor Total <span>R${{ $valorTotal }},00</span></p>
        </ul>
        <input type="submit" value="CONFIRMAR PEDIDO!">
    </form>
</section>

@endsection