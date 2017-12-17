@extends('layouts.app')

@section('content')
    @auth
        <div id="dashboard" class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <cards-venda valor="R$ 10.220,69" nome-campo="Vendas hoje"></cards-venda>
                        <cards-venda valor="R$ 70.300,55" nome-campo="Vendas essa semana"></cards-venda>
                        <cards-venda valor="R$ 185.638,36" nome-campo="Vendas esse mês"></cards-venda>
                        <cards-venda valor="R$ 9856,63" nome-campo="Média vendas por dia"></cards-venda>

                        <card-dashboard link="{{ url('/vendas/marcarhorario') }}" texto="Agendar horario"></card-dashboard>
                        <card-dashboard link="{{ url('/vendas/marcarhorario') }}" texto="Registrar venda"></card-dashboard>
                        <card-dashboard link="{{ url('/vendas/produtos#cadProd') }}" texto="Cadastrar produto"></card-dashboard>

                    </div>
                </div>
            </div>
        </div>
    @endauth

@endsection