<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Magazine Control</title>

        <link rel="stylesheet" href="{{ URL::asset('public/css/app.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('public/css/basic.css') }}" />

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Magazine Control
                </div>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control txt-form" id="txtEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control txt-form" id="txtSenha" placeholder="Senha">
                    </div>
                    <div class="form-group center">
                        <button type="button" class="btn btn-dark btn-lg">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
