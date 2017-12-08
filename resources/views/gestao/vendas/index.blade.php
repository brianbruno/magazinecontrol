@extends('gestao.vendas.layout')

@section('contents')

    <div class="row">
        <cards-venda valor="523" nome-campo="Vendas realizadas hoje"></cards-venda>
        <cards-venda valor="8925" nome-campo="Vendas realizadas neste mês"></cards-venda>
    </div>
    <div class="divider"></div>
    <div class="row">
        <cards-venda valor="{{ $resultado }}" nome-campo="Produtos cadastrados"></cards-venda>
        <cards-venda valor="Arroz Fino Grão 5KG" nome-campo="Produto mais vendido"></cards-venda>
    </div>

@endsection