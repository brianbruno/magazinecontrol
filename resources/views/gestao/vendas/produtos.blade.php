@extends('gestao.vendas.layout')

@section('contents')

    <div class="row">
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s4"><a class="active" href="#produtos">Produtos</a></li>
                    <li class="tab col s4"><a href="#todosProdutos">Todos os produtos</a></li>
                    <li class="tab col s4"><a class="waves-effect waves-light" href="#cadProd">Cadastrar produto</a></li>
                </ul>
            </div>
        </div>

        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p>{{ Session::get('alert-' . $msg) }} teste</p>
                @endif
            @endforeach
        </div> <!-- end .flash-message -->

        <div id="produtos" class="col s12">
            <cards-venda valor="Arroz Fino Grão 5KG" nome-campo="Produto mais vendido este mês"></cards-venda>
            <cards-venda valor="Skol Beats Sense Lata 310ml" nome-campo="Produto mais vendido hoje"></cards-venda>
        </div>
        <div id="todosProdutos" class="col s12">

            <table>
                <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome do Produto</th>
                </tr>
                </thead>

                <tbody>
                    @if($produtos->count())
                        @foreach($produtos as $produto)
                            <tr>
                                <td>{{$produto->CDPRODUTO}}</td>
                                <td>{{$produto->NMPRODUTO}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">Nenhum produto cadastrado!</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div id="cadProd" class="col s12">

            <form class="col s12" action="{{ route('produtos.store') }}" method="post" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                <h4>Cadastrar produto</h4>
                <div class="row">
                    <div class="input-field col s6">
                        <input id="codigoProduto" name="CDPRODUTO" type="text" maxlength="11" pattern="\d*" class="validate" required>
                        <label for="codigoProduto">Código</label>
                        <div id="divUnicoCod">
                            <div class="row">
                                <div class="col s2">
                                    <div class="preloader-wrapper small active">
                                        <div class="spinner-layer spinner-green-only">
                                            <div class="circle-clipper left">
                                                <div class="circle"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s10">
                                    <p>Checando disponibilidade do código...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-field col s6">
                        <input id="nomeProduto" name="NMPRODUTO" type="text" class="validate" maxlength="100" required>
                        <label for="nomeProduto">Nome</label>
                    </div>
                </div>
                <div class="right">
                    <button type="submit" id="btnCadProd" disabled class="modal-action waves-effect waves-green btn-flat">Cadastrar</button>
                </div>
            </form>
        </div>

    </div>

@endsection

@section('layoutScript')

    <script>

        $(document).ready(function () {
            $('.tabs').tabs();
            $('#divUnicoCod').hide();
            $('#codigoProduto').change(function() {
                let divUnicoCod = $('#divUnicoCod');
                let codigoInserido = $('#codigoProduto').val();
                let btnCadProd = $('#btnCadProd');

                divUnicoCod.show();

                $.ajax({
                    url: "produtos/codigoInserido/" + codigoInserido,
                    type: "get",
                    dataType: "json",
                    success: function(data){
                        divUnicoCod.hide();
                        if(data[0]) {
                            $('#codigoProduto').val('');
                            M.toast({
                                html: 'Código já existe.',
                                classes: 'rounded'
                            });
                        } else {
                            btnCadProd.prop("disabled", false);
                        }
                    },
                    error: function () {
                        divUnicoCod.hide();
                        M.toast({
                            html: 'Erro ao recuperar códigos do banco de dados.',
                            classes: 'rounded'
                        });
                    }
                });
            });
        });

    </script>

@endsection