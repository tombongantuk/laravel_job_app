<nav class="navbar navbar-expand-md navbar-dark bg-dark sidebarNavigation" data-sidebarClass="navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">DAMNNN!!!!!</a>
        <button class="navbar-toggler leftNavbarToggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link"href="{{ route('login') }}">Login</a>
                </li>
                <li>
                    <a class="nav-link"href="{{ route('register') }}">Register</a>
                </li>
                @else 
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"href="#" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" >
                        <li class="dropdown-item">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>    
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>