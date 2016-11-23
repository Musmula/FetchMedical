@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Edit basic pet information</div>
                <div class="panel-body">

                    @include('partials.petEditForm', compact('pet'))
                </div>
            </div> {{-- Panel end --}}

        </div>
    </div>
</div>
@endsection
