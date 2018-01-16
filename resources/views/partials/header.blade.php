<nav class="navbar navbar-toggleable-md ">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button id="navbutton" type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false" aria-controls="app-navbar-collapse" aria-label="Toggle navigation">
            <i id="bars-icon" class="fa fa-bars fa-2x" aria-hidden="true"></i>
            </button>
            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->

            <ul class="nav navbar-nav mr-auto">

            </ul>
            
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="licustom"><a href="{{ route('login') }}">Login</a></li>
                <li class="licustom"><a href="{{ route('register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
        </div>
    </div>    
</nav>