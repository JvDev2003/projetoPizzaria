@extends('app')

@section('content')

<section class="sabores">
    <form method="post" action="confirmacao">
        @csrf
        <ul>
            @foreach ($pizzas as $item)
                <li>
                    <div class="pizza">
                        <img src="{{ $item->img_url }}" rel="foto de pizza de {{ $item->nome }}"/>    
                    </div>
                    <div class="descricao-pizza">
                        <h3>{{ $item->nome }}</h3>
                        <span>(máximo 5 por cliente)</span>
                        <p>{{ $item->ingredientes }}</p>
                        <p>R${{ $item->valor }},00</p>
                        <span class="plus" onClick="adicionaUm('{{ $item->nome }}')">+</span><input type="number" max="5" min="0" name="{{ $item->nome }}" id="{{ $item->nome }}" readonly value="0"/><span class="minus" onClick="subtraiUm('{{ $item->nome }}')">-</span>
                        <input type="hidden" name="{{ $item->nome }}Valor" id="{{ $item->nome }}Valor" value="{{ $item->valor }}">
                    </div>
                </li>
            @endforeach
        </ul>
        <input type="submit" value="FAZER PEDIDO!">
    </form>
</section>

@endsection