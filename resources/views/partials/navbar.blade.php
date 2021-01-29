<nav class="navbar top-nav is-transparent">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item">
                🕹️ PhoenixRP
            </a>
            <span class="navbar-burger burger">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
        <div class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item pn-nav-item" href="/">
                    Home
                </a>
                <a class="navbar-item pn-nav-item" href="#">
                    Search
                </a>
                <a class="navbar-item pn-nav-item" href="{{ route('static.about') }}">
                    About
                </a>
                <a class="navbar-item pn-nav-item" href="{{ route('static.about') }}">
                    Leaderboard
                </a>
                @if(!Auth::check())
                <span class="navbar-item">
                <a class="button is-success is-rounded" href="{{ route('auth.steam') }}">
                        <span class="icon">
                            <i class="fab fa-steam-symbol"></i>
                        </span>
                        <span>Login with Steam</span>
                    </a>
                </span>
                @else
                <div class="navbar-item has-dropdown is-hoverable pn-nav-item" style="margin-left: 50px;">
                    <a class="navbar-link" href="#">
                    {{ Auth::user()->username }}
                    </a>
                    <div class="navbar-dropdown is-boxed has-text-dark">
                      <a class="navbar-item" href="{{ route('user.dashboard') }}">
                        Dashboard
                      </a>
                      <a class="navbar-item" href="#">
                        Settings
                      </a>
                      <hr class="navbar-divider">
                      <a class="navbar-item" href="{{ route('logout') }}">
                        Logout
                      </a>
                    </div>
                  </div>
                @endif
            </div>
        </div>
    </div>
</nav>
