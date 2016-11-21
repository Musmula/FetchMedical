@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registered pets:</div>
                    @if(count(Auth::user()->pets) > 0)
                        <ul class="list-group">
                            @foreach(Auth::user()->pets as $pet)
                                <li class="list-group-item">
                                    <a href="#">
                                        {{ $pet->name }}
                                    </a>
                                    <span class="pull-right">Queued for processing</span>
                                    <div class="clearfix"></div>
                                </li>
                            @endforeach()
                        </ul>
                    @endif
            </div> {{-- Panel end --}}

            <a class="btn btn-primary" href="{{ url('/pets/create') }}">
                <i class="fa fa-plus fa-btn"></i>
                Add
            </a>

        </div>
    </div>
</div>
@endsection
