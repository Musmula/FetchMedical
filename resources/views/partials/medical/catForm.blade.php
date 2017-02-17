@include('partials.medical.common')

<div class='form-group{{ $errors->has('fvrcp_vaccine') ? ' has-error' : '' }}'>
    <label for='fvrcp_vaccine' class='col-md-4 control-label'>FVRCP vaccine</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='fvrcp_vaccine' id='fvrcp_vaccine' value="{{ $records->fvrcp_vaccine }}">

        @if ($errors->has('fvrcp_vaccine'))
            <span class='help-block'>
                <strong>{{ $errors->first('fvrcp_vaccine') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /fvrcp_vaccine --}}

<div class="form-group{{ $errors->has('fvrcp_vendor') ? ' has-error' : '' }}">
    <label for="fvrcp_vendor" class="col-md-4 control-label">FVRCP vendor</label>

    <div class="col-md-6">

        <select class="form-control" name="fvrcp_vendor" id="fvrcp_vendor">
            <option>Vendor 1</option>
            <option>Vendor 2</option>
            <option>Vendor 3</option>
        </select>

        @if ($errors->has('fvrcp_vendor'))
            <span class="help-block">
                <strong>{{ $errors->first('fvrcp_vendor') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /fvrcp_vendor --}}

<div class='form-group{{ $errors->has('felv_vaccine') ? ' has-error' : '' }}'>
    <label for='felv_vaccine' class='col-md-4 control-label'>FELV vaccine</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='felv_vaccine' id='felv_vaccine' value="{{ $records->felv_vaccine }}">

        @if ($errors->has('felv_vaccine'))
            <span class='help-block'>
                <strong>{{ $errors->first('felv_vaccine') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /felv_vaccine --}}

<div class="form-group{{ $errors->has('felv_vendor') ? ' has-error' : '' }}">
    <label for="felv_vendor" class="col-md-4 control-label">FELV vendor</label>

    <div class="col-md-6">

        <select class="form-control" name="felv_vendor" id="felv_vendor">
            <option>Vendor 1</option>
            <option>Vendor 2</option>
            <option>Vendor 3</option>
        </select>

        @if ($errors->has('felv_vendor'))
            <span class="help-block">
                <strong>{{ $errors->first('felv_vendor') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /felv_vendor --}}

<div class='form-group{{ $errors->has('fip_vaccine') ? ' has-error' : '' }}'>
    <label for='fip_vaccine' class='col-md-4 control-label'>FIP vaccine</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='fip_vaccine' id='fip_vaccine' value="{{ $records->fip_vaccine }}">

        @if ($errors->has('fip_vaccine'))
            <span class='help-block'>
                <strong>{{ $errors->first('fip_vaccine') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /fip_vaccine --}}

<div class="form-group{{ $errors->has('fip_vendor') ? ' has-error' : '' }}">
    <label for="fip_vendor" class="col-md-4 control-label">FIP vendor</label>

    <div class="col-md-6">

        <select class="form-control" name="fip_vendor" id="fip_vendor">
            <option>Vendor 1</option>
            <option>Vendor 2</option>
            <option>Vendor 3</option>
        </select>

        @if ($errors->has('fip_vendor'))
            <span class="help-block">
                <strong>{{ $errors->first('fip_vendor') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /fip_vendor --}}

<div class='form-group{{ $errors->has('fiv_test') ? ' has-error' : '' }}'>
    <label for='fiv_test' class='col-md-4 control-label'>FIV test</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='fiv_test' id='fiv_test' value="{{ $records->fiv_test }}">

        @if ($errors->has('fiv_test'))
            <span class='help-block'>
                <strong>{{ $errors->first('fiv_test') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /fiv_test --}}

<div class="form-group{{ $errors->has('fiv_test_results') ? ' has-error' : '' }}">
    <label for="fiv_test_results" class="col-md-4 control-label">FIV test results</label>

    <div class="col-md-6">

        <select class="form-control" name="fiv_test_results" id="fiv_test_results">
            <option {{ $records->fiv_test_results == 'Negative' ? 'selected' : null }}>Negative</option>
            <option {{ $records->fiv_test_results == 'Positive' ? 'selected' : null }}>Positive</option>
        </select>

        @if ($errors->has('fiv_test_results'))
            <span class="help-block">
                <strong>{{ $errors->first('fiv_test_results') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /fiv_test_results --}}

<div class='form-group{{ $errors->has('felv_test') ? ' has-error' : '' }}'>
    <label for='felv_test' class='col-md-4 control-label'>FeLV test</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='felv_test' id='felv_test' value="{{ $records->felv_test }}">

        @if ($errors->has('felv_test'))
            <span class='help-block'>
                <strong>{{ $errors->first('felv_test') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /felv_test --}}

<div class="form-group{{ $errors->has('felv_test_results') ? ' has-error' : '' }}">
    <label for="felv_test_results" class="col-md-4 control-label">FeLV test results</label>

    <div class="col-md-6">

        <select class="form-control" name="felv_test_results" id="felv_test_results">
            <option {{ $records->felv_test_results == 'Negative' ? 'selected' : null }}>Negative</option>
            <option {{ $records->felv_test_results == 'Positive' ? 'selected' : null }}>Positive</option>
        </select>

        @if ($errors->has('felv_test_results'))
            <span class="help-block">
                <strong>{{ $errors->first('felv_test_results') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /felv_test_results --}}