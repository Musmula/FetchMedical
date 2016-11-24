<form class="form-horizontal" role="form" method="POST" action="{{ url('/records/' . $records->id) }}">

    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <input type="hidden" name="pet_id" value="{{ $pet->id }}">

    <div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
        <label for="notes" class="col-md-4 control-label">General Notes</label>

        <div class="col-md-6">
            <textarea id="notes" class="form-control" name="notes" style="resize: vertical;" rows="4">{{ $records->notes }}</textarea>

            @if ($errors->has('notes'))
                <span class="help-block">
                    <strong>{{ $errors->first('notes') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /notes --}}

    <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
        <label for="weight" class="col-md-4 control-label">Weight</label>

        <div class="col-md-6">
            <input type="number" class="form-control" name="weight" id="weight" value="{{ $records->weight}}">

            @if ($errors->has('weight'))
                <span class="help-block">
                    <strong>{{ $errors->first('weight') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /weight --}}

    <div class="form-group{{ $errors->has('weight_date') ? ' has-error' : '' }}">
        <label for="weight_date" class="col-md-4 control-label">Wight Date</label>

        <div class="col-md-6">
            <input type="date" class="form-control" name="weight_date" id="weight_date" value="{{ $records->weight_date}}">

            @if ($errors->has('weight_date'))
                <span class="help-block">
                    <strong>{{ $errors->first('weight_date') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /weight_date --}}

    <div class="form-group{{ $errors->has('microchip_co') ? ' has-error' : '' }}">
        <label for="microchip_co" class="col-md-4 control-label">Microchip Company</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="microchip_co" id="microchip_co" value="{{ $records->microchip_co}}">

            @if ($errors->has('microchip_co'))
                <span class="help-block">
                    <strong>{{ $errors->first('microchip_co') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /microchip_co --}}

    <div class="form-group{{ $errors->has('microchip_id') ? ' has-error' : '' }}">
        <label for="microchip_id" class="col-md-4 control-label">Microchip id</label>

        <div class="col-md-6">
            <input type="number" class="form-control" name="microchip_id" id="microchip_id" value="{{ $records->microchip_id}}">

            @if ($errors->has('microchip_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('microchip_id') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /microchip_id --}}

    <div class="form-group{{ $errors->has('rabies_co') ? ' has-error' : '' }}">
        <label for="rabies_co" class="col-md-4 control-label">Rabies Company</label>

        <div class="col-md-6">
            <input type="tetx" class="form-control" name="rabies_co" id="rabies_co" value="{{ $records->rabies_co}}">

            @if ($errors->has('rabies_co'))
                <span class="help-block">
                    <strong>{{ $errors->first('rabies_co') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /rabies_co --}}

    <div class="form-group{{ $errors->has('rabies_date') ? ' has-error' : '' }}">
        <label for="rabies_date" class="col-md-4 control-label">Rabies Date</label>

        <div class="col-md-6">
            <input type="date" class="form-control" name="rabies_date" id="rabies_date" value="{{ $records->rabies_date}}">

            @if ($errors->has('rabies_date'))
                <span class="help-block">
                    <strong>{{ $errors->first('rabies_date') }}</strong>
                </span>
            @endif
        </div>
    </div> {{-- /rabies_date --}}

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-save"></i>
                Save
            </button>
        </div>
    </div>

</form>