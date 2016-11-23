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
                        <a href="{{ url('/pets/' . $pet->id . '/edit') }}" data-toggle="tooltip" title="Edit basic information" class="btn btn-default">
                            <i class="fa fa-conditional fa-edit"></i>
                            <span class="title fa-conditional">Edit basic information</span>
                        </a>

                        <button class="btn btn-default" data-toggle="tooltip" title="Request a higher level edit">
                            <i class="fa fa-conditional fa-user-md"></i>
                            <span class="title fa-conditional">Request a higher level edit</span>
                        </button>

                        <form style="display: inline;" method="POST" action="{{ url('/pets/' . $pet->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" style="border-bottom-left-radius: 0; border-top-left-radius: 0" data-toggle="tooltip" title="Delete all records">
                                <i class="fa fa-conditional fa-trash"></i>
                                <span class="title fa-conditional">Delete all records</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
