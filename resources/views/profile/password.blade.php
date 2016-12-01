@extends('profile.layout')

@section('profile')

    <div class="spacer"></div>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile/password') }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Old password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required autofocus>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password-confirm') ? ' has-error' : '' }}">
            <label for="password-confirm" class="col-md-4 control-label">New password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password-confirm" required>

                @if ($errors->has('password-confirm'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password-confirm') }}</strong>
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