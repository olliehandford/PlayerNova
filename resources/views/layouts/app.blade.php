<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhoenixRP &raquo; Keeping players accountable</title>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('img/favicon/apple-touch-icon-57x57.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('img/favicon/apple-touch-icon-114x114.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('img/favicon/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('img/favicon/apple-touch-icon-144x144.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ asset('img/favicon/apple-touch-icon-60x60.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('img/favicon/apple-touch-icon-120x120.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ asset('img/favicon/apple-touch-icon-76x76.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('img/favicon/apple-touch-icon-152x152.png')}}" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-196x196.png')}}" sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-96x96.png')}}" sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-16x16.png')}}" sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ asset('img/favicon/favicon-128.png')}}" sizes="128x128" />
    <meta name="application-name" content="PhoenixRP" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ asset('img/favicon/mstile-144x144.png')}}" />
    <meta name="msapplication-square70x70logo" content="{{ asset('img/favicon/mstile-70x70.png')}}" />
    <meta name="msapplication-square150x150logo" content="{{ asset('img/favicon/mstile-150x150.png')}}" />
    <meta name="msapplication-wide310x150logo" content="{{ asset('img/favicon/mstile-310x150.png')}}" />
    <meta name="msapplication-square310x310logo" content="{{ asset('img/favicon/mstile-310x310.png')}}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
</head>

<body>
    <section class="active hero is-primary" style="background-image: url({{ asset('svg/pattern.png') }});">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            @include('partials.navbar')
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    🕹️
                    <br> PhoenixRP Stats
                </h1>
                <h2 class="subtitle">
                   Snoop on fellow PhoenixRP players
                </h2>
               <!-- <form action="{{ route('search') }}" method="POST">
                    <input class="input search" type="text" name="data" id="data" placeholder="Search by Username or SteamID" autocomplete="off"> {{ csrf_field() }}
                </form>-->
            </div>
        </div>
    </section>

    @yield('content')

    <footer class="fp-auto-height hero is-light-grey">
        <div class="hero-body">
            <div class="container">
                <div class="columns">
                    <div class="column is-half">
                        <h1 class="title">
                            🕹️ PhoenixRP Stats
                        </h1>
                        <h6 class="subtitle is-6">
                            a project by Ollie
                        </h6>
                    </div>
                    <div class="column">
                        <h6 class="title is-6">
                            PhoenixRP
                        </h6>
                        <a href="/">Home</a>
                        <br>
                        <a href="{{ route('search') }}">Search</a>
                        <br>
                        <a href="{{ route('static.about') }}">About</a>
                    </div>
                    <div class="column">
                        <h6 class="title is-6">
                            Connect
                        </h6>
                        <a href="#">Twitter</a>
                        <br>
                        <a href="#">Facebook</a>
                        <br>
                        <a href="#">Email</a>
                        <br>
                        <a href="#">Contact</a>
                    </div>
                    <div class="column">
                        <h6 class="title is-6">
                            Legal
                        </h6>
                        <a href="#">Privacy Policy</a>
                        <br>
                        <a href="#">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-footer pn-margins">
            <div class="container has-text-centered">
                <h6 class="subtitle is-6 has-text-centered"> Site designed with ❤️ by the PhoenixRP team</h6>
            </div>
        </div>
    </footer>
</body>

</html>
