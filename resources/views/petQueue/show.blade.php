@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Queue Item info</div>
                    @include('partials.queueItemInfo', compact('item'))
            </div> {{-- Panel end --}}
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Basic info</div>
                <div class="panel-body">
                    @include('partials.petEditForm', compact('pet'))
                </div>
            </div> {{-- Panel end --}}
        </div>


        
    </div>
</div>
@endsection
