@extends('profile.layout')

@section('profile')

    <div class="spacer"></div>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile/contact') }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <label for="phone" class="col-md-4 control-label">Phone number</label>

            <div class="col-md-6">
                <input id="phone" type="text" class="form-control" name="phone" required autofocus>

                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            <label for="address" class="col-md-4 control-label">Address</label>

            <div class="col-md-6">
                <input id="address" type="password" class="form-control" name="address">

                @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
            <label for="city" class="col-md-4 control-label">City</label>

            <div class="col-md-6">
                <input id="city" type="password" class="form-control" name="city">

                @if ($errors->has('city'))
                    <span class="help-block">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
            <label for="zip" class="col-md-4 control-label">ZIP</label>

            <div class="col-md-6">
                <input id="zip" type="password" class="form-control" name="zip">

                @if ($errors->has('zip'))
                    <span class="help-block">
                        <strong>{{ $errors->first('zip') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
            <label for="fax" class="col-md-4 control-label">Fax</label>

            <div class="col-md-6">
                <input id="fax" type="password" class="form-control" name="fax">

                @if ($errors->has('fax'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fax') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-save"></i>
                    Save
                </button>
            </div>
        </div>

    </form>

@stop