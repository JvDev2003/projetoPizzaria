@extends('app')

@section('content')

<main id="containerSistem">
    <div id="alertSistem"></div>
    <section class="pedidos">
        <h1>Pedidos</h1>
        <table>
            <thead>
                <tr>
                    <th>N° Pedido</th>
                    <th>Itens</th>
                    <th>Endereço</th>
                    <th>Cliente</th>
                    <th>Valor Total</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos as $pedido)
                <tr>
                    @php

                        $itemsTratar = $items[$pedido->idPedido];

                        $string = "";
                        $valorTotal = 0;

                        foreach ($itemsTratar as $key => $value) {

                            $string .= "{$value['quantidade']} X {$value['fkPizza']}";
                            $valorTotal += $value['quantidade'] * $value['valor'];

                        }
                       // print_r([0]['quantidade']);


                    @endphp

                    <td>{{ $pedido->idPedido }}</td>
                    <td>{{ $string }}</td>
                    <td>teste</td>
                    <td>teste</td>
                    <td>R${{ $valorTotal }},00</td>
                    <td>
                        <a href="sistema/concluir/{{$pedido->idPedido}}"><i class="fa-solid fa-check" style="color:green"></i></a>
                        <a href="sistema/excluir/{{$pedido->idPedido}}"><i class="fa-solid fa-xmark" style="color:red"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</main>

@endsection

