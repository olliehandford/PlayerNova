@extends('layouts.app')

@section('content')
<section>
    <div class="container has-text-centered">
        @if($players->isEmpty())
        <h1 class="title is-1" style="margin-top: 50px;">Sorry, no results found.</h1>
        <h5 class="subtitle is-5" style="margin-top: 50px;margin-bottom:50px;">Is this an error? Let us know <a href="mailto:support@playernova.com">here</a></h1>
        @else
        <h1 class="title is-1" style="margin-top: 50px;">Here are your results...</h1>
        <table class="table is-fullwidth is-hoverable is-striped is-bordered" style="margin-top: 50px; margin-bottom: 50px;">
            <thead>
              <tr>
                <th>Name</th>
                <th>Aliases</th>
                <th>Cash</th>
                <th>Bank</th>
                <th>Factions</th>
                <th>Last login</th>
                <th>ID</th>
              </tr>
            </thead>
            <tbody>
                @foreach($players as $player)
              <tr>
                <td><a href="{{ route('player.player', $player->playerid) }}">{{ $player->name }}</a></td>
                <td>@foreach($player->getAliases() as $alias) <span class="tag is-dark">{{ $alias }}</span> @endforeach</td>
                <td>@money($player->cash)</td>
                <td>@money($player->bankacc)</td>
                <td>{!! $player->getFactions() !!}</td>
                <td>{{ $player->getLastPlayedDiffForHumans() }}</td>
                <td><a href="https://steamcommunity.com/profiles/{{ $player->playerid }}">{{ $player->playerid }}</a></td>
              </tr>
              @endforeach

            </tbody>
          </table>
          {{ $players->appends(request()->input())->links() }}
          @endif
    </div>
</section>
@endsection
