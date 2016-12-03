<form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" action="{{ url('/pets/' . $pet->id) }}">

    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
        <label for="picture" class="col-md-4 control-label">New picture</label>

        <div class="col-md-6">
            <span class="btn btn-default btn-file">
                Browse <input type="file" name="picture">
            </span>

            @if ($errors->has('picture'))
                <span class="help-block">
                    <strong>{{ $errors->first('picture') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /picture --}}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Name</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ $pet->name }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /name --}}


    @if(Auth::user()->is_admin)

    <div class="form-group{{ $errors->has('species') ? ' has-error' : '' }}">
        <label for="species" class="col-md-4 control-label">Species</label>

        <div class="col-md-6">
        <select id="species" name="species" class="form-control" value="{{ $pet->species }}" required>
                <option {{ $pet->species == 'Cat' ? 'selected' : null }}>Cat</option>
                <option {{ $pet->species == 'Dog' ? 'selected' : null }}>Dog</option>
            </select>

            @if ($errors->has('species'))
                <span class="help-block">
                    <strong>{{ $errors->first('species') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /species --}}

    <div class="form-group{{ $errors->has('breed') ? ' has-error' : '' }}">
        <label for="breed" class="col-md-4 control-label">Breed</label>

        <div class="col-md-6">
            <input id="breed" type="text" class="form-control" name="breed" value="{{ $pet->breed }}" required autofocus>

            @if ($errors->has('breed'))
                <span class="help-block">
                    <strong>{{ $errors->first('breed') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /breed --}}

    <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
        <label for="color" class="col-md-4 control-label">Color</label>

        <div class="col-md-6">
            <input id="color" type="text" class="form-control" name="color" value="{{ $pet->color }}">

            @if ($errors->has('color'))
                <span class="help-block">
                    <strong>{{ $errors->first('color') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /color --}}


    <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
        <label for="gender" class="col-md-4 control-label">Gender</label>

        <div class="col-md-6">
            <select id="gender" name="gender" class="form-control" value="{{ $pet->gender }}" required>
                <option {{ $pet->gender == 'Female' ? 'selected' : null }}>Female</option>
                <option {{ $pet->gender == 'Male' ? 'selected' : null }}>Male</option>
            </select>

            @if ($errors->has('gender'))
                <span class="help-block">
                    <strong>{{ $errors->first('gender') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /gender --}}

    <div class="form-group{{ $errors->has('processed') ? ' has-error' : '' }}">
        <label for="processed" class="col-md-4 control-label">Has been processed</label>

        <div class="col-md-6">
            <select id="processed" name="processed" class="form-control" value="{{ old($pet->processed) }}" required>
                <option value="1" {{ $pet->processed ? 'selected' : null }} >Yes</option>
                <option value="0" {{ !$pet->processed ? 'selected' : null }}>No</option>
            </select>

            @if ($errors->has('processed'))
                <span class="help-block">
                    <strong>{{ $errors->first('processed') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /gender --}}

    @endif

    <div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
        <label for="notes" class="col-md-4 control-label">Notes</label>

        <div class="col-md-6">
            <textarea id="notes" class="form-control" name="notes" style="resize: vertical;" rows="4">{{ $pet->notes }}</textarea>

            @if ($errors->has('notes'))
                <span class="help-block">
                    <strong>{{ $errors->first('notes') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /notes --}}

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-refresh"></i>
                Update
            </button>
        </div>
    </div>

</form>