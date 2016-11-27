@extends('app')

@section('head')

<style>
    #heading {
        text-align: center;
        color: #fff;
        background-color: #3097D1;
        box-shadow: 0 2px 4px 0px rgba(0, 0, 0, .1);
    }

    #body {
        text-align: center;
        font-size: 1.5em;
    }

    p {
        text-align: center;
    }

    a {
        color: #636b6f;
    }

    a:hover {
        color: #636b6f;
    }
</style>

@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <div class="panel panel-default" onclick="window.open('http://dvorski.tech/', '_blank');">
                <div class="panel-heading" id="heading"><h2>Developed by</h2></div>

                <div class="panel-body" id="body">
                    <a target="_blank" href="http://dvorski.tech">Oliver Dvorski</a>
                </div>
            </div> {{-- Panel ending --}}

            <p>Version 1.0</p>
        </div>
    </div>
</div>
@endsection
