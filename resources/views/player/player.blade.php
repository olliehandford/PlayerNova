@extends('layouts.app') @section('content')
<section>
    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="columns">

            <div class="column is-one-quarter">
                <div class="card">
                    <div class="card-image">
                        <figure>
                            <img src="https://stats.phoenixrp.co.uk/uniform/U_C_Commoner_shorts.jpg" alt="Placeholder image" style="margin-left: auto;margin-right: auto; display: block;">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">{{ $player->name }}</p>
                                <p class="subtitle is-7">Joined the island {{ $player->getJoinedDiffForHumans() }}</p>
                            </div>
                        </div>

                        <div class="content">
                            <div class="pn-rule">
                                <div class="pn-rule-text">
                                    Factions
                                </div>
                                <div class="pn-divider"></div>
                            </div>
                            <p>{!! $player->getFactions() !!}</p>
                        </div>

                        <footer class="card-footer">
                            <p class="card-footer-item">
                                <span>
                                    <a href="#">Report</a>
                                </span>
                            </p>
                            <p class="card-footer-item">
                                <span>
                                    <a href="#">Recommend</a>
                                </span>
                            </p>
                        </footer>
                    </div>
                </div>
            </div>
            <div class="column">
                <nav class="level is-mobile">
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">Bank</p>
                            <p class="title">@money($player->bankacc)</p>
                        </div>
                    </div>
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">Cash</p>
                            <p class="title">@money($player->cash)</p>
                        </div>
                    </div>
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">Vehicles</p>
                            <p class="title">{{ $player->vehicles()->count() }}</p>
                        </div>
                    </div>
                    <div class="level-item has-text-centered">
                        <div>
                            <p class="heading">Gang</p>
                            <p class="title">n/a</p>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="columns">
                <div class="column is-half">
                    q1
                </div>
                <div class="column is-half">
                    q2
                </div>
            </div>
            <div class="columns">
                <div class="column is-half">
                    q3
                </div>
                <div class="column is-half">
                    q4
                </div>
            </div>
        </div>

</section>
@endsection
