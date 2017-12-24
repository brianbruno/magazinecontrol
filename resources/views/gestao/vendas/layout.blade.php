@extends('layouts.app')

@section('content')

    <nav class="grey darken-1">
        <div class="nav-wrapper">
            <a href="{{ route('vendas') }}" class="brand-logo hide-on-med-and-down">Gestão</a>

            <ul id="nav-mobile" class="right">
                <li><a href="{{ route('vendas') }}">Vendas</a></li>
                <li><a href="{{ route('produtos') }}">Produtos</a></li>
            </ul>
        </div>
    </nav>

    @yield('contents')

@endsection

@section('script')

    @yield('layoutScript')

@endsection


