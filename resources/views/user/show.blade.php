@extends('app')

@section('content')

<div class="container-fluid profile-pic-lg">
    <img src="https://www.gravatar.com/avatar/{{ md5($user->email) }}?s=200&d=mm">
</div>

<div class="container user-info">
    {{-- @include('user.partials.actions') --}}

    <div class="row">
        <div class="col-md-4">

            <div class="panel panel-primary">
                <div class="panel-heading">Basic User information</div>
                @include('user.partials.basic')
            </div> {{-- Panel end --}}

        </div>
        <div class="col-md-4">
            
            <div class="panel panel-primary">
                <div class="panel-heading">Contact information</div>
                @include('user.partials.contact')
            </div>

        </div>

        <div class="col-md-4">

            <div class="panel panel-primary">
                <div class="panel-heading">Vet information</div>
                @include('user.partials.vet')
            </div>

        </div>

    </div>
</div>

@stop