@extends('layouts.pdf')

@section('content')
<div class="header">
    <h1 id="heading">
        <img src="{{ public_path('img/logo.svg') }}" id="logo">
        Fetch Medical<sup id="r">&reg;</sup>
    </h1>
</div>

<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="general-info-section">
                <img src="{{ public_path('uploads/petImages/' . $pet->picture) }}" alt="{{ $pet->name }}">

                <h2 style="padding-left: 40px; line-height: 1">{{ $pet->name }}</h2>

                <ul class="list-group" id="general-info">
                    <li class="list-group-item">Species: {{ $pet->species }}</li>
                    <li class="list-group-item">Breed: {{ $pet->breed }}</li>
                    <li class="list-group-item">Color: {{ $pet->color }}</li>
                    <li class="list-group-item">Gender: {{ $pet->gender }}</li>
                    <li class="list-group-item">Notes: {{ $pet->notes }}</li>
                </ul>
            </div>


            <div class="clearfix"></div>
            <br>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>General medical information</h3>
                </div>

                @include('partials.medical.display.info')
            </div> {{-- Panel end --}}

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Species specific medical information</h3>
                </div>

                @if ($pet->species == 'Dog')
                    @include('partials.medical.display.dog-medical')
                @else
                    @include('partials.medical.display.cat-medical')
                @endif
            </div> {{-- Panel end --}}

            <div class="user-info pdf">

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Basic User information</h3></div>
                    @include('user.partials.basic')
                </div> 

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Contact information</h3></div>
                    @include('user.partials.contact')
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Vet information</h3></div>
                    @include('user.partials.vet')
                </div>

            </div>

        </div>

    </div>
</div>

@stop