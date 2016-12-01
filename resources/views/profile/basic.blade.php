@extends('profile.layout')

@section('profile')

    <div class="spacer"></div>

    <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile') }}">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-mail</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
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