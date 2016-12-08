@include('partials.medical.common')

<div class='form-group{{ $errors->has('dhpp_vaccine') ? ' has-error' : '' }}'>
    <label for='dhpp_vaccine' class='col-md-4 control-label'>dhpp_vaccine</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='dhpp_vaccine' id='dhpp_vaccine' value="{{ $records->dhpp_vaccine }}">

        @if ($errors->has('dhpp_vaccine'))
            <span class='help-block'>
                <strong>{{ $errors->first('dhpp_vaccine') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /dhpp_vaccine --}}

<div class="form-group{{ $errors->has('dhpp_vendor') ? ' has-error' : '' }}">
    <label for="dhpp_vendor" class="col-md-4 control-label">dhpp_vendor</label>

    <div class="col-md-6">

        <select class="form-control" name="dhpp_vendor" id="dhpp_vendor">
            <option>Vendor 1</option>
            <option>Vendor 2</option>
            <option>Vendor 3</option>
        </select>

        @if ($errors->has('dhpp_vendor'))
            <span class="help-block">
                <strong>{{ $errors->first('dhpp_vendor') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /dhpp_vendor --}}

<div class='form-group{{ $errors->has('bordetella_vaccine') ? ' has-error' : '' }}'>
    <label for='bordetella_vaccine' class='col-md-4 control-label'>bordetella_vaccine</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='bordetella_vaccine' id='bordetella_vaccine' value="{{ $records->bordetella_vaccine }}">

        @if ($errors->has('bordetella_vaccine'))
            <span class='help-block'>
                <strong>{{ $errors->first('bordetella_vaccine') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /bordetella_vaccine --}}

<div class="form-group{{ $errors->has('bordetella_vendor') ? ' has-error' : '' }}">
    <label for="bordetella_vendor" class="col-md-4 control-label">bordetella_vendor</label>

    <div class="col-md-6">

        <select class="form-control" name="bordetella_vendor" id="bordetella_vendor">
            <option>Vendor 1</option>
            <option>Vendor 2</option>
            <option>Vendor 3</option>
        </select>

        @if ($errors->has('bordetella_vendor'))
            <span class="help-block">
                <strong>{{ $errors->first('bordetella_vendor') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /bordetella_vendor --}}

<div class='form-group{{ $errors->has('corona_vaccine') ? ' has-error' : '' }}'>
    <label for='corona_vaccine' class='col-md-4 control-label'>corona_vaccine</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='corona_vaccine' id='corona_vaccine' value="{{ $records->corona_vaccine }}">

        @if ($errors->has('corona_vaccine'))
            <span class='help-block'>
                <strong>{{ $errors->first('corona_vaccine') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /corona_vaccine --}}

<div class="form-group{{ $errors->has('corona_vendor') ? ' has-error' : '' }}">
    <label for="corona_vendor" class="col-md-4 control-label">corona_vendor</label>

    <div class="col-md-6">

        <select class="form-control" name="corona_vendor" id="corona_vendor">
            <option>Vendor 1</option>
            <option>Vendor 2</option>
            <option>Vendor 3</option>
        </select>

        @if ($errors->has('corona_vendor'))
            <span class="help-block">
                <strong>{{ $errors->first('corona_vendor') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /corona_vendor --}}

<div class='form-group{{ $errors->has('parvo_vaccine') ? ' has-error' : '' }}'>
    <label for='parvo_vaccine' class='col-md-4 control-label'>parvo_vaccine</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='parvo_vaccine' id='parvo_vaccine' value="{{ $records->parvo_vaccine }}">

        @if ($errors->has('parvo_vaccine'))
            <span class='help-block'>
                <strong>{{ $errors->first('parvo_vaccine') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /parvo_vaccine --}}

<div class="form-group{{ $errors->has('parvo_vendor') ? ' has-error' : '' }}">
    <label for="parvo_vendor" class="col-md-4 control-label">parvo_vendor</label>

    <div class="col-md-6">

        <select class="form-control" name="parvo_vendor" id="parvo_vendor">
            <option>Vendor 1</option>
            <option>Vendor 2</option>
            <option>Vendor 3</option>
        </select>

        @if ($errors->has('parvo_vendor'))
            <span class="help-block">
                <strong>{{ $errors->first('parvo_vendor') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /parvo_vendor --}}

<div class='form-group{{ $errors->has('heartworm_test') ? ' has-error' : '' }}'>
    <label for='heartworm_test' class='col-md-4 control-label'>heartworm_test</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='heartworm_test' id='heartworm_test' value="{{ $records->heartworm_test }}">

        @if ($errors->has('heartworm_test'))
            <span class='help-block'>
                <strong>{{ $errors->first('heartworm_test') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /heartworm_test --}}

<div class="form-group{{ $errors->has('heartworm_test_results') ? ' has-error' : '' }}">
    <label for="heartworm_test_results" class="col-md-4 control-label">heartworm_test_results</label>

    <div class="col-md-6">

        <select class="form-control" name="heartworm_test_results" id="heartworm_test_results">
            <option {{ $records->heartworm_test_results == 'Negative' ? 'selected' : null }}>Negative</option>
            <option {{ $records->heartworm_test_results == 'Positive' ? 'selected' : null }}>Positive</option>
        </select>

        @if ($errors->has('heartworm_test_results'))
            <span class="help-block">
                <strong>{{ $errors->first('heartworm_test_results') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /heartworm_test_results --}}