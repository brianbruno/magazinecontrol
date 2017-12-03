@extends('layouts.app')

@section('content')

    @guest
        <div class="container">
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div >
                        <h1 class="center">Magazine Control</h1>
                    </div>

                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" class="form-control txt-form" id="txtEmail" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control txt-form" id="txtSenha" placeholder="Senha" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group center">
                            <button type="submit" class="waves-effect waves-light btn-large teal darken-4">Login <i class="material-icons right">send</i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endguest

@endsection