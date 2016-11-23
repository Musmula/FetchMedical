@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Queue items:</div>
                    @if(count($queue) > 0)
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

                    @else
                        <div class="panel-body">
                            The queue is empty
                        </div>

                    @endif
            </div> {{-- Panel end --}}

        </div>
    </div>
</div>
@endsection
