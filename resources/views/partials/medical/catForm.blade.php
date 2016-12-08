@include('partials.medical.common')

<div class='form-group{{ $errors->has('fvrcp_vaccine') ? ' has-error' : '' }}'>
    <label for='fvrcp_vaccine' class='col-md-4 control-label'>fvrcp_vaccine</label>

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
    <label for="fvrcp_vendor" class="col-md-4 control-label">fvrcp_vendor</label>

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
    <label for='felv_vaccine' class='col-md-4 control-label'>felv_vaccine</label>

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
    <label for="felv_vendor" class="col-md-4 control-label">felv_vendor</label>

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
    <label for='fip_vaccine' class='col-md-4 control-label'>fip_vaccine</label>

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
    <label for="fip_vendor" class="col-md-4 control-label">fip_vendor</label>

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

<div class='form-group{{ $errors->has('leukemia_test') ? ' has-error' : '' }}'>
    <label for='leukemia_test' class='col-md-4 control-label'>leukemia_test</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='leukemia_test' id='leukemia_test' value="{{ $records->leukemia_test }}">

        @if ($errors->has('leukemia_test'))
            <span class='help-block'>
                <strong>{{ $errors->first('leukemia_test') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /leukemia_test --}}

<div class="form-group{{ $errors->has('leukemia_test_results') ? ' has-error' : '' }}">
    <label for="leukemia_test_results" class="col-md-4 control-label">leukemia_test_results</label>

    <div class="col-md-6">

        <select class="form-control" name="leukemia_test_results" id="leukemia_test_results">
            <option {{ $records->leukemia_test_results == 'Negative' ? 'selected' : null }}>Negative</option>
            <option {{ $records->leukemia_test_results == 'Positive' ? 'selected' : null }}>Positive</option>
        </select>

        @if ($errors->has('leukemia_test_results'))
            <span class="help-block">
                <strong>{{ $errors->first('leukemia_test_results') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /leukemia_test_results --}}