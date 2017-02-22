@extends('app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your basic account information</div>

                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="{{ $active == 'basic' ? 'active' : null }}"><a href="{{ url('/profile') }}">Basic info</a></li>
                        <li role="presentation" class="{{ $active == 'password' ? 'active' : null }}"><a href="{{ url('/profile/password') }}">Change Password</a></li>
                        <li role="presentation" class="{{ $active == 'contact' ? 'active' : null }}"><a href="{{ url('/profile/contact') }}">Contact</a></li>
                        <li role="presentation" class="{{ $active == 'vet' ? 'active' : null }}"><a href="{{ url('/profile/vet') }}">Vet Contact Info &amp; Notes</a></li>
                    </ul>

                    <div>
                        @yield('profile')
                    </div>

                </div>
            </div> {{-- Panel end --}}

            <div class="panel panel-danger">
                <div class="panel-heading">Danger zone</div>
                <div class="panel-body">
                    <p>Once you delete your account, there is no going back. Please be certain.</p>
                    <form method="POST" action="{{ url('/account') }}" id="dropAccountForm">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger" id="dropAcc">Delete my account</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

@stop

@section('foot')
    <script>
        document.getElementById("dropAcc").addEventListener("click", function(e) {
            e.preventDefault();

            swal({
                title: "Are you sure?",
                text: "This action cannot be undone",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#bf5329",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
                },
                    function() {
                        document.getElementById('dropAccountForm').submit();
                    }
                );
        });
    </script>
@stop