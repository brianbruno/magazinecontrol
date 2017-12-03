@extends('gestao.vendas.layout')

@section('contents')

    <div class="row">
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="waves-effect waves-light modal-trigger" href="#modalCadProd">Cadastrar produto</a></li>
                </ul>
            </div>
        </div>

        <cards-venda valor="Arroz Fino Grão 5KG" nome-campo="Produto mais vendido este mês"></cards-venda>
        <cards-venda valor="Skol Beats Sense Lata 310ml" nome-campo="Produto mais vendido hoje"></cards-venda>

    </div>

    <!-- Modal Structure -->
    <div id="modalCadProd" class="modal">
        <form class="col s12 modal-content">
            <h4>Cadastrar produto</h4>
            <div class="row">
                <div class="input-field col s6">
                    <input id="codigoProduto" type="text" maxlength="11" pattern="\d*" class="validate" required>
                    <label for="codigoProduto">Código</label>
                </div>
                <div class="input-field col s6">
                    <input id="nomeProduto" type="text" class="validate" maxlength="100" required>
                    <label for="nomeProduto">Nome</label>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat">Cancelar</a>
                <button type="" href="{{ route('produtos.store') }}" class="modal-action waves-effect waves-green btn-flat">Cadastrar</button>
            </div>
        </form>
    </div>

@endsection