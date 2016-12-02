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
                <div class="panel-heading">Basic pet info</div>
                <div class="panel-body">
                    @include('partials.petEditForm', compact('pet'))
                </div>
            </div> {{-- Panel end --}}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Medical records</div>
                <div class="panel-body">
                    @include('partials.petMedicalRecords', ['records' => $pet->medicalRecords])
                </div>
            </div> {{-- Panel end --}}
        </div>

        <form style="text-align: center; margin-bottom: 20px" method="POST" action="{{ url('/pets/queue/' . $item->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="checkbox" name="allow_pet_status" id="allow_pet_status" checked>
            <label for="allow_pet_status">Set pet status to <i>processed</i></label>
            <br>
            <button class="btn btn-success">
                <i class="fa fa-btn fa-check"></i>
                Mark as done
            </button>
        </form> 

    </div>
</div>
@endsection
