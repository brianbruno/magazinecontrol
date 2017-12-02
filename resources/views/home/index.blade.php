@extends('layouts.app')

@section('content')
    @auth
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <cards-venda valor="10.220,69" nome-campo="Vendas hoje"></cards-venda>
                        <cards-venda valor="70.300,55" nome-campo="Vendas essa semana"></cards-venda>
                        <cards-venda valor="185.638,36" nome-campo="Vendas esse mês"></cards-venda>
                        <cards-venda valor="9856,63" nome-campo="Média vendas por dia"></cards-venda>

                    </div>
                </div>
            </div>
        </div>
    @endauth

@endsection