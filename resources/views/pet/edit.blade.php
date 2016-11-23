@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">Edit basic pet information</div>
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/pets/' . $pet->id) }}">

                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

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

                        <div class="form-group{{ $errors->has('breed') ? ' has-error' : '' }}">
                            <label for="breed" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="breed" type="text" class="form-control" name="breed" value="{{ $pet->breed }}" required autofocus>

                                @if ($errors->has('breed'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('breed') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> {{-- /breed --}}

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
                </div>
            </div> {{-- Panel end --}}

        </div>
    </div>
</div>
@endsection
