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
                    <li class="list-group-item well well-sm" style="margin-bottom: 0; border-bottom: none">
                        Status: Queued for processing
                    </li>
                    <li class="list-group-item">
                        Registered {{ $pet->created_at->diffForHumans() }}
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
                </ul>

                <div class="panel-body">
                    <div class="btn-group" role="group">
                        <a href="{{ url('/pets/' . $pet->id . '/edit') }}" class="btn btn-default">
                            <i class="fa fa-btn fa-edit"></i>
                            Edit basic information
                        </a>
                        <button class="btn btn-default">
                            <i class="fa fa-btn fa-user-md"></i>
                            Request a higher level edit
                        </button>
                        <form style="display: inline;" method="POST" action="{{ url('/pets/' . $pet->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" style="border-bottom-left-radius: 0; border-top-left-radius: 0">
                                <i class="fa fa-btn fa-trash"></i>
                                Delete all records
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
