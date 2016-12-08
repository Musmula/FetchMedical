@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

                <div class="pets">
                    @if(count(Auth::user()->pets) > 0)
                        @foreach(Auth::user()->pets as $pet)
                            
                            <pet    url="{{ url('/pets/' . $pet->id) }}"
                                    status="{{ $pet->status }}"
                                    name={{ $pet->name }}
                                    img="{{ url('/uploads/petImages/' . $pet->picture) }}">
                            </pet>

                        @endforeach
                    @else 
                        <a href="{{ url('/pets/create') }}">You haven't registered any pets yet</a>
                    @endif
                </div>

                <a class="btn btn-primary" href="{{ url('/pets/create') }}">
                    <i class="fa fa-plus fa-btn"></i>
                    Add
                </a>
                </div>

        </div>
    </div>
</div>
@endsection
