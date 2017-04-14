@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Users:</h2>
                <br>
                <div class="panel" style="border-radius: 3px; padding-bottom: 0">
                    <ul class="list-group">
                        @foreach($users as $user)
                            <form action="{{ url('admins') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                <li class="list-group-item">
                                    {{ $user->email }}
                                    <span class="pull-right">
                                        @if ($user->is_admin)
                                            <button class="btn btn-danger" name="action" value="remove">Remove admin control</button>
                                        @else
                                            <button class="btn btn-default" name="action" value="grant">Grant admin control</button>
                                        @endif
                                    </span>
                                    <div class="clearfix"></div>
                                </li>
                            </form>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

@stop