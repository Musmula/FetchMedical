@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Register a new pet</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/pets') }}">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> {{-- /name --}}

                        <div class="form-group{{ $errors->has('species') ? ' has-error' : '' }}">
                            <label for="species" class="col-md-4 control-label">Species</label>

                            <div class="col-md-6">
                                <input id="species" type="text" class="form-control" name="species" value="{{ old('species') }}" required>

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
                                <input id="breed" type="text" class="form-control" name="breed" value="{{ old('breed') }}" required>

                                @if ($errors->has('breed'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('breed') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> {{-- /breed --}}

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">gender</label>

                            <div class="col-md-6">
                                <select id="gender" name="gender" class="form-control" value="{{ old('gender') }}" required>
                                    <option>Female</option>
                                    <option>Male</option>
                                </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> {{-- /gender --}}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div> {{-- Panel end --}}

        </div>
    </div>
</div>
@endsection
