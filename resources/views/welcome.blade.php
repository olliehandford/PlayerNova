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
    <meta name="application-name" content="PhoenixRP"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ asset('img/favicon/mstile-144x144.png')}}" />
    <meta name="msapplication-square70x70logo" content="{{ asset('img/favicon/mstile-70x70.png')}}" />
    <meta name="msapplication-square150x150logo" content="{{ asset('img/favicon/mstile-150x150.png')}}" />
    <meta name="msapplication-wide310x150logo" content="{{ asset('img/favicon/mstile-310x150.png')}}" />
    <meta name="msapplication-square310x310logo" content="{{ asset('img/favicon/mstile-310x310.png')}}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <div id="playerNovaApp">
    <section class="section active hero is-primary is-fullheight hero-playernova fp-auto-height" style="background-image: url({{ asset('svg/pattern.png') }});">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            @include('partials.navbar')
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    🕹️
                    <br> PhoenixRP
                </h1>
                <h2 class="subtitle">
                    Gather all your information about PhoenixRP players, have a snoop...
                </h2>
                <form action="{{ route('search.results') }}" method="GET">
                    <input class="input search" type="text" name="data" id="search" placeholder="Begin your search" autocomplete="off">
                </form>
            </div>
        </div>
        <div class="hero-footer">
            <div class="container has-text-centered" style="bottom: 50px;">
                <button onclick="$.fn.fullpage.moveSectionDown()" class="button is-white is-medium is-rounded">
                    <i class="fas fa-angle-down"></i>
                </button>
            </div>
        </div>
    </section>
    <section class="section fp-auto-height hero is-fullheight">
        <div class="container">
            <div class="hero-head">
                <h1 class="title is-1 has-text-centered" style="margin-top: 50px;">How does it work?</h1>
            </div>
            <div class="columns pn-margins">
                <div class="column is-one-third has-text-centered">
                    <h3 class="title is-3">📡
                        <br> We find data
                    </h3>
                    <h5 class="subtitle is-5">from publicly available sources</h5>
                </div>
                <div class="column is-one-third has-text-centered">
                    <h3 class="title is-3">✉️
                        <br> We get data
                    </h3>
                    <h5 class="subtitle is-5">from our partners and you</h5>
                </div>
                <div class="column is-one-third has-text-centered">
                    <h3 class="title is-3">📊
                        <br> We share data
                    </h3>
                    <h5 class="subtitle is-5">with everyone</h5>
                </div>
            </div>
            <div class="columns pn-margins">
                <div class="column is-one-third">
                    <img src="http://via.placeholder.com/350x400" alt="Placeholder">
                </div>
                <div class="column">
                    <h4 class="subtitle is-4">So, what's the story? 📚</h4>
                    <p>
                        <strong>PhoenixRP</strong> is a public database/repository of player information which is contributed to
                        by the
                        <strong>public</strong>, established gaming communities/organisations (or
                        <strong>partners</strong>) and publicly open datasources such as
                        <strong>Steam</strong>.
                        <br>
                        <br>
                        <h4 class="subtitle is-4">Why is this useful? 🙏</h4>
                        The system can be used by
                        <strong>players</strong> to determine the player’s overall
                        <strong>reputation</strong>. It can also be used by gaming communities in games such as
                        <strong>ArmA III</strong> to determine whether or not a player has had a recurring occurrence of causing
                        issues / breaking rules and cheating. This will
                        <strong>help communities</strong> to properly determine whether or not the player should be banned on their
                        platform.
                        <br>
                        <br>
                        <h4 class="subtitle is-4">So you're harvesting data? 😠</h4>
                        <strong>No.</strong> We never collect information on players that haven't given permission. All data we collect
                        from services like
                        <strong>Steam</strong>
                        is only available due to their public API's, which can be limited by your privacy settings.
                        <strong>Gaming communities</strong> have a
                        <strong>Privacy Policy</strong>
                        in which you agree for specific information to be shared with Third-Parties (us), allowing us to expand our database.
                        <br>
                        <br>
                        <!-- <h4 class="subtitle is-4">What about the players? ⛹️‍</h4>
                        <strong>Players</strong> write comments about
                        other players based on an identifier, such as your <strong>Steam ID</strong>, and give them a rating. This system doesn't include let us gather any information other
                        than a witness account of events just from playing with someone. This system is very carefully moderated by our <strong>Support Team</strong> to make things fair.-->
                    </p>
                </div>
            </div>
            <div class="hero-footer has-text-centered">
                <a class="button is-primary is-medium is-rounded" onclick="$.fn.fullpage.moveSectionUp()">Woah, let me search right now</a><br>
                or scroll down for more info 😉
            </div>
        </div>

    </section>

    <section class="section fp-auto-height hero is-fullheight is-light-grey">
            <div class="hero-head">
                <h1 class="title is-1 has-text-centered" style="margin-top: 50px;">Our partners 🤝</h1>
                <h4 class="subtitle is-4 has-text-centered">they mean the world to us</h4>
            </div>
            <div class="hero-body">
                <div class="container">
                <div class="columns">
                    <div class="column is-one-third has-text-centered">
                        <img src="{{ asset('img/phoenixrpblack.png') }}" alt="PhoenixRP">
                        <h6 class="subtitle is-6">ArmA III and FiveM</h6>
                    </div>
                    <div class="column is-one-third has-text-centered">
                        <img src="{{ asset('img/phoenixrpblack.png') }}" alt="PhoenixRP">
                        <h6 class="subtitle is-6">ArmA III and FiveM</h6>
                    </div>
                    <div class="column is-one-third has-text-centered">
                        <img src="{{ asset('img/phoenixrpblack.png') }}" alt="PhoenixRP">
                        <h6 class="subtitle is-6">ArmA III and FiveM</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-footer pn-margins">
                <h6 class="subtitle is-6 has-text-centered">Want to become a partner? Drop us a line <a href="mailto:partners@PhoenixRP.com">here</a></h6>
        </div>
    </section>
    <section class="section fp-auto-height is-primary hero" style="background-image: url({{ asset('svg/pattern.png') }});">
            <div class="hero-body">
              <div class="container">
                  <div class="columns">
                      <div class="column">
                            <h1 class="title">
                                    It's time to join the solution
                                  </h1>
                                  <h2 class="subtitle">
                                    Register today
                                  </h2>
                      </div>
                      <div class="column">
                          <button class="button is-large is-rounded has-text-centered" style="float:right;">Join PhoenixRP</button>
                      </div>
                  </div>

              </div>
            </div>
    </section>
    <footer class="section fp-auto-height hero">
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
                                        <a href="#">Home</a><br>
                                        <a href="#">Search</a><br>
                                        <a href="#">About</a>
                                    </div>
                                    <div class="column">
                                            <h6 class="title is-6">
                                                Connect
                                            </h6>
                                            <a href="#">Twitter</a><br>
                                            <a href="#">Facebook</a><br>
                                            <a href="#">Email</a><br>
                                            <a href="#">Contact</a>
                                        </div>
                                        <div class="column">
                                                <h6 class="title is-6">
                                                    Legal
                                                </h6>
                                                <a href="#">Privacy Policy</a><br>
                                                <a href="#">Terms of Service</a>
                                            </div>
                                </div>
                    </div>
                  </div>
                  <div class="hero-footer pn-margins">
                      <div class="container has-text-centered">
                            <h6 class="subtitle is-6 has-text-centered"> Site designed with ❤️ by Ollie</h6>
                      </div>
                  </div>
          </footer>
</div>
</body>

</html>
