@extends('app')

@section('head')

<style>

    .panel-heading {
        padding-left: calc(30% + .8rem);
    }

    .table td {
        /*width: 50% !important;*/
    }

    /* Key */
    .table td:nth-child(2n - 1) {
        text-align: right;
        font-weight: 700;
        width: 30%;
    }

    /* Value */
    .table td:nth-child(2n) {
        text-align: left;
        width: 70%;
    }
</style>

@stop

@section('content')

<div class="container-fluid profile-pic-lg">
    <img src="https://www.gravatar.com/avatar/{{ md5($user->email) }}?s=200&d=mm">
</div>

<div class="container">
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