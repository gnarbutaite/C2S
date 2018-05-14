<nav class="navbar navbar-expand-md  " style="background-color:#171a1d;">
    <div class="container">

        <a class="navbar-brand navbar-brand-centered" style="font-size:30px;font-family: sans-serif; color: snow" href="{{ url('/home') }}">
            <strong> Kiwi</strong>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <ul class="nav navbar-nav navbar-light ml-auto">
                    <li class="nav-item pull-right">
                        <a class="nav-link" href="{{url('/chat')}}" style="font-size:20px; font-family: sans-serif"><b>My Chats</b></a>
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


        </ul>
    </div>
    </div>
</nav>