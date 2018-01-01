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

                        <dashboard-cards></dashboard-cards>

                    </div>
                </div>
            </div>
        </div>
    @endauth

@endsection