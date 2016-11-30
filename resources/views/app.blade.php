<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.fetchmedical = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @yield('head')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        @if(Auth::check())
                            @if(count(Auth::user()->pets) > 0)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Pets <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        @foreach(Auth::user()->pets as $pet)
                                            <li><a href="{{ url('/pets/' . $pet->id) }}">{{ $pet->name }}</a></li>
                                        @endforeach

                                        <li role="separator" class="divider"></li>
                                        
                                        @if(count(Auth::user()->pets) > 1)
                                            <li><a href="{{ url('home') }}">All</a></li>
                                        @endif

                                        <li><a href="{{ url('/pets/create') }}">
                                            New
                                        </a></li>
                                    </ul>
                                </li>

                            @else
                                <li><a href="{{ url('pets') }}">Pets</a></li>
                            @endif
                        @endif

                        @if(Auth::check() && Auth::user()->is_admin)
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Admin <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/pets/queue/') }}">
                                            <i aria-hidden="true" class="fa fa-refresh"></i>
                                            Pet Queue
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i aria-hidden="true" class="fa fa-search"></i>
                                            Pet Search
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{ url('/users') }}">
                                            <i aria-hidden="true" class="fa fa-user"></i>
                                            User Management
                                        </a>
                                    </li> --}}
                                </ul>
                            </li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <img src="https://www.gravatar.com/avatar/{{ md5(Auth::user()->email) }}?s=20&d=mm">
                                    &nbsp;
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('settings') }}">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('settings') }}">
                                            <i class="fa fa-cog" aria-hidden="true"></i>
                                            Settings
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="/js/app.js"></script>

    @include('sweet::alert')
    @include('partials.analyticstracking')
    
</body>
</html>
