@extends('layouts.dashboard')

@section('dashboard_content')
<section>
        <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    <li><a href="/">PlayerNova</a></li>
                    <li class="is-active"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                </ul>
            </nav>
            <section class="info-tiles">
                <div class="tile is-ancestor has-text-centered">
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">12</p>
                            <p class="subtitle">Servers</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">Free</p>
                            <p class="subtitle">Plan</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">0</p>
                            <p class="subtitle">Teams</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">0</p>
                            <p class="subtitle">Pending Tasks</p>
                        </article>
                    </div>
                </div>
            </section>
                    <div class="notification is-warning" style="margin-top:1.5rem;">
                            <strong>PlayerNova</strong> is still in Alpha, and development of our systems is still very much underway. Please make sure you report any bugs <a href="mailto:support@playernova.com">here</a>.
                          </div>

                          <div class="content">
                                <h1>Welcome back, {{ Auth::user()->username }}</h1>
                                <p>You're currently viewing the <strong>Alpha</strong> dashboard of PlayerNova. On this section of the site you will be able to see all the information of services you have RCON access too, and be able to view all other members that have access to those services. This is still in development.</p>
                                <h2>What is a team?</h2>
                                <p>A <strong>Team</strong> is a group of people, controlled by an <strong>Owner</strong> which have RCON access to a server. Only the <strong>Owner</strong> can give someone access to a team. To join a team you may recieve an Invite Link or a code you can enter <a href="#">here</a>. Being in a team allows you to :-</p>
                                <ul>
                                  <li>View the console of the server</li>
                                  <li>Ban/Unban players</li>
                                  <li>Send RCON commands</li>
                                  <li>Be alerted when a server is offline</li>
                                  <li>See a list of team members</li>
                                </ul>
                          </div>
@endsection
