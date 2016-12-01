@extends('app')

@section('content')

<div class="container-fluid {{ Auth::user()->is_admin ? 'admin' : null }}" id="profile-pic-lg">
    <img src="https://www.gravatar.com/avatar/{{ md5(Auth::user()->email) }}?s=200&d=mm">
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="alert alert-info alert-dismissible" role="alert">
                Want to change your profile picture?
                We pull those from <a href="https://en.gravatar.com/" target="_blank" class="alert-link">gravatar.com</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Your basic account information</div>

                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="{{ $active == 'basic' ? 'active' : null }}"><a href="{{ url('/profile') }}">Basic info</a></li>
                        <li role="presentation" class="{{ $active == 'password' ? 'active' : null }}"><a href="{{ url('/profile/password') }}">Password change</a></li>
                        <li role="presentation" class="{{ $active == 'contact' ? 'active' : null }}"><a href="{{ url('/profile/contact') }}">Emergency contact</a></li>
                        <li role="presentation" class="{{ $active == 'vet' ? 'active' : null }}"><a href="{{ url('/profile/vet') }}">Vet contact</a></li>
                    </ul>

                    <div>
                        @yield('profile')
                    </div>

                </div>
            </div> {{-- Panel end --}}

            {{-- move this to settings --}}
            
            <div class="panel panel-danger">
                <div class="panel-heading">Danger zone</div>
                <div class="panel-body">
                    <p>Once you delete your account, there is no going back. Please be certain.</p>
                    <form method="POST" action="{{ url('/account') }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger">Delete my account</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@stop