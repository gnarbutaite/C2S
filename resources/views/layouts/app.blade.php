

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Project 7') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('http://code.jquery.com/jquery-latest.min.js') }}"></script>




</head>
<body>
    <div id="app">

        @if(Auth::guest())
            @include('layouts.NavBarGuest')

        @else


        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    <strong> Kiwi</strong>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <ul class="nav navbar-nav navbar-light ml-auto">
                    <li class="nav-item pull-right">
                        <a class="nav-link" href="#">My Chats</a>
                    </li>
                </ul>

                    <!-- Right Side Of Navbar -->

                        <ul class="pull-right navbar-nav ml-auto">
                            <!-- Authentication Links -->

                            <li class="nav-item dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                    {{ Auth::user()->name }}

                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                                    <a class="dropdown-item" href="{{ route('profile') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                        {{ __('profile') }}
                                    </a>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <form id="profile-form" action="{{ route('profile') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
