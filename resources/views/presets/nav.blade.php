<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
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

                @if (! Auth::guest())
                <ul class="nav navbar-nav">
                    @include('vendor.laravel-menu.bootstrap-navbar-items', ['items' => $MyNavBar->roots()])
                    <form class="navbar-form navbar-right">
                        <button type="button" class="btn btn-info">Create</button>
                    </form>
                </ul>

            @endif

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-star"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" lass="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="glyphicon glyphicon-cog"> </i><span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="adminmenu">
                            <li class="dropdown-header">Administration</li>
                            <li><a href="{{ route('roles.index') }}">Roles</a></li>
                            <li><a href="permissions">Permissions</a></li>
                            <li><a href="teams">Teams</a></li>
                            <li class="divider"></li>
                            <li><a href="users">Users</a></li>
                            <li class="divider"></li>
                            <li><a href="system">System</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('profile') }}">Profile</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>

            @if (! Auth::guest())
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input class="form-control" placeholder="Search">
                    </div>
                </form>
            @endif
        </div>
    </div>
</nav>