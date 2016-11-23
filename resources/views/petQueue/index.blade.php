@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registered pets:</div>
                    <ul class="list-group">
                        @foreach($queue as $item)
                            <li class="list-group-item">
                                <a href="{{ url('/pets/queue/' . $item->id) }}">
                                    {{ $item->name }}
                                </a>
                                <span class="pull-right"> {{ $item->type }} </span>
                                <div class="clearfix"></div>
                            </li>
                        @endforeach()
                    </ul>
            </div> {{-- Panel end --}}

        </div>
    </div>
</div>
@endsection
