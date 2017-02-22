<div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
    <label for="weight" class="col-md-4 control-label">Weight (pounds)</label>

    <div class="col-md-6">
        <input type="number" class="form-control" name="weight" id="weight" value="{{ $generalRecords->weight}}">

        @if ($errors->has('weight'))
            <span class="help-block">
                <strong>{{ $errors->first('weight') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /weight --}}

<div class="form-group{{ $errors->has('weight_date') ? ' has-error' : '' }}">
    <label for="weight_date" class="col-md-4 control-label">Weighting date</label>

    <div class="col-md-6">
        <input type="date" class="form-control" name="weight_date" id="weight_date" value="{{ $generalRecords->weight_date}}">

        @if ($errors->has('weight_date'))
            <span class="help-block">
                <strong>{{ $errors->first('weight_date') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /weight_date --}}

<div class="form-group{{ $errors->has('microchip_id') ? ' has-error' : '' }}">
    <label for="microchip_id" class="col-md-4 control-label">Microchip #</label>

    <div class="col-md-6">
        <input type="number" class="form-control" name="microchip_id" id="microchip_id" value="{{ $generalRecords->microchip_id}}">

        @if ($errors->has('microchip_id'))
            <span class="help-block">
                <strong>{{ $errors->first('microchip_id') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /microchip_id --}}

<div class="form-group{{ $errors->has('microchip_co') ? ' has-error' : '' }}">
    <label for="microchip_co" class="col-md-4 control-label">Microchip vendor</label>

    <div class="col-md-6">
    <select class="form-control" name="microchip_co" id="microchip_co">
            <option>Vendor 1</option>
            <option>Vendor 2</option>
            <option>Vendor 3</option>
        </select>

        @if ($errors->has('microchip_co'))
            <span class="help-block">
                <strong>{{ $errors->first('microchip_co') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /microchip_co --}}

<div class="form-group{{ $errors->has('insurrance_policy') ? ' has-error' : '' }}">
    <label for="insurrance_policy" class="col-md-4 control-label">Insurance policy</label>

    <div class="col-md-6">
        <input type="text" class="form-control" name="insurrance_policy" id="insurrance_policy" value="{{ $generalRecords->insurrance_policy}}">

        @if ($errors->has('insurrance_policy'))
            <span class="help-block">
                <strong>{{ $errors->first('insurrance_policy') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /insurrance_policy --}}

<div class="form-group{{ $errors->has('insurrance_co') ? ' has-error' : '' }}">
    <label for="insurrance_co" class="col-md-4 control-label">Insurance vendor</label>

    <div class="col-md-6">

        <select class="form-control" name="insurrance_co" id="insurrance_co">
            <option>Vendor 1</option>
            <option>Vendor 2</option>
            <option>Vendor 3</option>
        </select>

        @if ($errors->has('insurrance_co'))
            <span class="help-block">
                <strong>{{ $errors->first('insurrance_co') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /insurrance_co --}}

<div class='form-group{{ $errors->has('conditions') ? ' has-error' : '' }}'>
    <label for='conditions' class='col-md-4 control-label'>Known conditions</label>

    <div class='col-md-6'>
        <textarea id='conditions' class='form-control' name='conditions' style='resize: vertical;' rows='4'>{{ $generalRecords->conditions }}</textarea>

        @if ($errors->has('conditions'))
            <span class='help-block'>
                <strong>{{ $errors->first('conditions') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /conditions --}}

<div class='form-group{{ $errors->has('rabies') ? ' has-error' : '' }}'>
    <label for='rabies' class='col-md-4 control-label'>Rabies</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='rabies' id='rabies' value="{{ $generalRecords->rabies }}">

        @if ($errors->has('rabies'))
            <span class='help-block'>
                <strong>{{ $errors->first('rabies') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /rabies --}}

<div class='form-group{{ $errors->has('rabies_co') ? ' has-error' : '' }}'>
    <label for='rabies_co' class='col-md-4 control-label'>Rabies co</label>

    <div class='col-md-6'>
        <input type='text' class='form-control' name='rabies_co' id='rabies_co' value="{{ $generalRecords->rabies_co }}">

        @if ($errors->has('rabies_co'))
            <span class='help-block'>
                <strong>{{ $errors->first('rabies_co') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /rabies_co --}}

<div class='form-group{{ $errors->has('rabies_vaccine') ? ' has-error' : '' }}'>
    <label for='rabies_vaccine' class='col-md-4 control-label'>Rabies vaccine</label>

    <div class='col-md-6'>
        <input type='text' class='form-control' name='rabies_vaccine' id='rabies_vaccine' value="{{ $generalRecords->rabies_vaccine }}">

        @if ($errors->has('rabies_vaccine'))
            <span class='help-block'>
                <strong>{{ $errors->first('rabies_vaccine') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /rabies_vaccine --}}

<div class='form-group{{ $errors->has('rabies_vendor') ? ' has-error' : '' }}'>
    <label for='rabies_vendor' class='col-md-4 control-label'>Rabies vendor</label>

    <div class='col-md-6'>
        <input type='text' class='form-control' name='rabies_vendor' id='rabies_vendor' value="{{ $generalRecords->rabies_vendor }}">

        @if ($errors->has('rabies_vendor'))
            <span class='help-block'>
                <strong>{{ $errors->first('rabies_vendor') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /rabies_vendor --}}

<div class='form-group{{ $errors->has('fecal_test') ? ' has-error' : '' }}'>
    <label for='fecal_test' class='col-md-4 control-label'>Fecal test</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='fecal_test' id='fecal_test' value="{{ $generalRecords->fecal_test }}">

        @if ($errors->has('fecal_test'))
            <span class='help-block'>
                <strong>{{ $errors->first('fecal_test') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /fecal_test --}}

<div class='form-group{{ $errors->has('fecal_test_results') ? ' has-error' : '' }}'>
    <label for='fecal_test_results' class='col-md-4 control-label'>Fecal test results</label>

    <div class='col-md-6'>
        <select name='fecal_test_results' class='form-control' id=fecal_test_results>
            <option {{ $generalRecords->fecal_test_results == 'Negative' ? 'selected' : null }}>Negative</option>
            <option {{ $generalRecords->fecal_test_results == 'Positive' ? 'selected' : null }}>Positive</option>
        </select>

        @if ($errors->has('fecal_test_results'))
            <span class='help-block'>
                <strong>{{ $errors->first('fecal_test_results') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /fecal_test_results --}}

<div class='form-group{{ $errors->has('dental_date') ? ' has-error' : '' }}'>
    <label for='dental_date' class='col-md-4 control-label'>Dental date</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='dental_date' id='dental_date' value="{{ $generalRecords->fecal_test }}">

        @if ($errors->has('dental_date'))
            <span class='help-block'>
                <strong>{{ $errors->first('dental_date') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /dental_date --}}

<div class='form-group{{ $errors->has('dental_notes') ? ' has-error' : '' }}'>
    <label for='dental_notes' class='col-md-4 control-label'>Dental notes</label>

    <div class='col-md-6'>
        <textarea id='dental_notes' class='form-control' name='dental_notes' style='resize: vertical;' rows='4'>{{ $generalRecords->dental_notes }}</textarea>

        @if ($errors->has('dental_notes'))
            <span class='help-block'>
                <strong>{{ $errors->first('dental_notes') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /dental_notes --}}

<div class='form-group{{ $errors->has('other_vaccine') ? ' has-error' : '' }}'>
    <label for='other_vaccine' class='col-md-4 control-label'>Other vaccine</label>

    <div class='col-md-6'>
        <textarea id='other_vaccine' class='form-control' name='other_vaccine' style='resize: vertical;' rows='4'>{{ $generalRecords->other_vaccine }}</textarea>

        @if ($errors->has('other_vaccine'))
            <span class='help-block'>
                <strong>{{ $errors->first('other_vaccine') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /other_vaccine --}}

<div class='form-group{{ $errors->has('other_vaccine_date') ? ' has-error' : '' }}'>
    <label for='other_vaccine_date' class='col-md-4 control-label'>Other vaccine date</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='other_vaccine_date' id='other_vaccine_date' value="{{ $generalRecords->other_vaccine_date }}">

        @if ($errors->has('other_vaccine_date'))
            <span class='help-block'>
                <strong>{{ $errors->first('other_vaccine_date') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /other_vaccine_date --}}

<div class='form-group{{ $errors->has('other_vaccine_notes') ? ' has-error' : '' }}'>
    <label for='other_vaccine_notes' class='col-md-4 control-label'>Other vaccine notes</label>

    <div class='col-md-6'>
        <textarea id='other_vaccine_notes' class='form-control' name='other_vaccine_notes' style='resize: vertical;' rows='4'>{{ $generalRecords->other_vaccine_notes }}</textarea>

        @if ($errors->has('other_vaccine_notes'))
            <span class='help-block'>
                <strong>{{ $errors->first('other_vaccine_notes') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /other_vaccine_notes --}}

<div class='form-group{{ $errors->has('vet_certificate_file') ? ' has-error' : '' }}'>
    <label for='vet_certificate_file' class='col-md-4 control-label'>Vet certificate file</label>

    <div class='col-md-6'>
        <input type='file' class='form-control' name='vet_certificate_file' id='vet_certificate_file' value="{{ $generalRecords->vet_certificate_filename }}">

        @if ($errors->has('vet_certificate_file'))
            <span class='help-block'>
                <strong>{{ $errors->first('vet_certificate_file') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /vet_certificate_file --}}

<div class='form-group{{ $errors->has('notes') ? ' has-error' : '' }}'>
    <label for='notes' class='col-md-4 control-label'>Notes</label>

    <div class='col-md-6'>
    <textarea id='notes' class='form-control' name='notes' style='resize: vertical;' rows='4'>{{ $generalRecords->notes }}</textarea>

        @if ($errors->has('notes'))
            <span class='help-block'>
                <strong>{{ $errors->first('notes') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /notes --}}

<div class='form-group{{ $errors->has('notes_file') ? ' has-error' : '' }}'>
    <label for='notes_file' class='col-md-4 control-label'>Notes file</label>

    <div class='col-md-6'>
        <input type='date' class='form-control' name='notes_file' id='notes_file' value="{{ $generalRecords->notes_file }}">

        @if ($errors->has('notes_file'))
            <span class='help-block'>
                <strong>{{ $errors->first('notes_file') }}</strong>
            </span>
        @endif
    </div>
</div> {{-- /notes_file --}}