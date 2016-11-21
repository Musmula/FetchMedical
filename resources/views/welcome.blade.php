@extends('app')

@section('head')

<style>
    .panel-heading{
        background: url('img/banner.jpg') center / cover;
        height: 300px;
        position: relative;
    }

    .panel-heading h2 {
        position: absolute;
        left: 10px;
        bottom: 0;
        color: #fff;
        background-color: #3097D1;
        display: inline-block;
        padding: 10px 20px;
        font-size: 2em;
        max-width: 80%;
    }

    .panel-body {
        padding: 0;
    }

    .actions {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-top: 40px;
    }

    .actions .action {
        flex-basis: 200px;
        text-decoration: none;
    }
    
    .actions .action img {
        width: 100%;
        height: auto;
    }

    .actions .action p {
        text-align: center;
        color: #636b6f;
        font-size: 20px;
        padding-top: 10px;
    }
</style>

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Welcome to Fetch Medical</h2>
            </div>

            <div class="panel-body">
                <div class="actions">
                    <a href="{{ url('register') }}" class="action signup">
                        <img src="{{ url('img/dog-laptop.jpg') }}">
                        <p>Sign up</p>
                    </a>
                    <a href="{{ url('login') }}" class="action login">
                        <img src="{{ url('img/cat-laptop.jpg') }}">
                        <p>Log in</p>
                    </a>
                    <a href="{{ url('about') }}" class="action more">
                        <img src="{{ url('img/dog-vet.jpg') }}">
                        <p>Learn more</p>
                    </a>
                </div>
            </div>
        </div> {{-- Panel end --}}
    </div>
</div>
@endsection
