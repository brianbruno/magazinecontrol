@extends('layouts.app')

@section('content')

    <nav class="grey darken-1">
        <div class="nav-wrapper">
            <a href="{{ route('vendas') }}" class="brand-logo">Gestão</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
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


