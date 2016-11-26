@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h2>{{ $pet->name }}</h2>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">
                        Status: Queued for processing
                    </li>

                    <li class="list-group-item">
                        Species: {{ $pet->species }}
                    </li>
                    
                    <li class="list-group-item">
                        Breed: {{ $pet->breed }}
                    </li>
                    
                    <li class="list-group-item">
                        Gender: {{ $pet->gender }}
                    </li>

                    @if($pet->color != "")

                        <li class="list-group-item">
                            Color: {{ $pet->color }}
                        </li>

                    @endif
                </ul>

                <div class="panel-body" style="text-align: center;">
                    @if($pet->notes != "")
                        <p style="text-align: left;">Notes:</p>
                        <textarea readonly class="well" style="width: 100%; resize: vertical;" rows="4">{{ $pet->notes }}</textarea>
                    @endif

                    <div class="btn-group" role="group">
                        <a href="{{ url('/pets/' . $pet->id . '/edit') }}" data-toggle="tooltip" title="Edit basic information" class="btn btn-default">
                            <i class="fa fa-edit"></i>
                        </a>

                        @if(count($pet->queue) < 3)

                        <a href="{{ url('/pets/' . $pet->id . '/request') }}" class="btn btn-default" data-toggle="tooltip" title="Request a higher level edit">
                            <i class="fa fa-user-md"></i>
                        </a>

                        <a href="{{ url('/pets/' . $pet->id . '/profile/download') }}" class="btn btn-default" data-toggle="tooltip" title="Download profile">
                            <i class="fa fa-download"></i>
                        </a>

                        <a href="{{ url('/pets/' . $pet->id . '/profile/view') }}" class="btn btn-default" data-toggle="tooltip" title="View profile as pdf">
                            <i class="fa fa-eye"></i>
                        </a>

                        <a href="#" class="btn btn-default" data-toggle="tooltip" title="Email medical records">
                            <i class="fa fa-envelope"></i>
                        </a>

                        @endif

                        <form style="display: inline;" method="POST" action="{{ url('/pets/' . $pet->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" style="border-bottom-left-radius: 0; border-top-left-radius: 0" data-toggle="tooltip" title="Delete all records">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
