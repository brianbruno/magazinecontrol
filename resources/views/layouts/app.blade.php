<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Magazine Control') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/basic.css') }}" rel="stylesheet">
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>
    <div id="app">

        @auth
            <ul id="dropdown" class="dropdown-content">
                <li><a href="{{ route('vendas') }}">Vendas</a></li>
                <li><a href="#!">Loja</a></li>
                <li class="divider"></li>
                <li><a href="#!">Pessoal</a></li>
            </ul>
            <ul id="dropdownUser" class="dropdown-content">
                <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                </li>
            </ul>
            <nav class="indigo lighten-5 nav-extended">
                <div class="nav-wrapper">
                    <a href="{{ url('/') }}" class="brand-logo grey-text text-darken-4 hide-on-med-and-down">{{ config('app.name', 'Laravel') }}</a>
                    <a href="#" data-target="mobile-nav" class="sidenav-trigger right"><i class="material-icons black-text">menu</i></a>
                    <a href="{{ url('/') }}" class="brand-logo center teal-text text-darken-4">Dashboard</a>
                    <ul class="right hide-on-med-and-down">
                        <!-- Dropdown Trigger -->
                        <li><a class="dropdown-trigger grey-text text-darken-4" href="#!" data-target="dropdown">Gestão<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li><a class="dropdown-trigger grey-text text-darken-4" href="#!" data-target="dropdownUser">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>

                    <ul class="sidenav" id="mobile-nav">
                        <li><a class="dropdown-trigger grey-text text-darken-4" href="#!" data-target="dropdown">Gestão<i class="material-icons right">arrow_drop_down</i></a></li>
                        <li class="divider"></li>
                        <li><a class="dropdown-trigger grey-text text-darken-4" href="#!" data-target="dropdownUser">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>

                </div>
                <!-- Stripe -->
                <div class="nav-content">
                    <div class="card-panel yellow lighten-5">
                        <span class="black-text"><strong>Filial:</strong> 1250 - Castelão Água Branca</span>
                        <a class="btn-floating btn-large waves-effect waves-light orange darken-4 right"><i class="material-icons">mode_edit</i></a>
                    </div>
                </div>
            </nav>

        @endauth

        <div class="container">
            @yield('content')
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Compiled and minified JavaScript -->
    <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.2/js/materialize.min.js"></script>
    <script>

        $(document).ready(function () {
            $(".dropdown-trigger").dropdown();
            $('.modal').modal();
            $('.sidenav').sidenav();
        });

    </script>

    @yield('script')

</body>
</html>
