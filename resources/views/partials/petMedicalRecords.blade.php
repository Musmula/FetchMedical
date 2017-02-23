<form class="form-horizontal" role="form" method="POST" action="{{ url('/records/' . $records->id) }}" enctype="multipart/form-data">

    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <input type="hidden" name="pet_id" value="{{ $pet->id }}">

    @if ($pet->species == "Cat")
        @include('partials.medical.catForm')
    @else
        @include('partials.medical.dogForm')
    @endif

    
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-save"></i>
                Save
            </button>
        </div>
    </div>

</form>