@extends('layouts.pdf')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <h1>Fetch Medical<sup>&reg;</sup> Records for {{ $pet->name }}</h1>
        
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Profile information</h3>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">Name: {{ $pet->name }}</li>
                    <li class="list-group-item">Species: {{ $pet->species }}</li>
                    <li class="list-group-item">Breed: {{ $pet->breed }}</li>
                    <li class="list-group-item">Color: {{ $pet->color }}</li>
                    <li class="list-group-item">Gender: {{ $pet->gender }}</li>
                    <li class="list-group-item">Notes: {{ $pet->notes }}</li>
                </ul>

            </div> {{-- Panel end --}}

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
                    <div class="panel-heading">Basic User information</div>
                    @include('user.partials.basic')
                </div> 

                <div class="panel panel-default">
                    <div class="panel-heading">Contact information</div>
                    @include('user.partials.contact')
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Vet information</div>
                    @include('user.partials.vet')
                </div>

            </div>

        </div>

    </div>
</div>

@stop