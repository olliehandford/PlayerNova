<aside class="menu">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><a class="is-active">Dashboard</a></li>
            <li><a>Settings</a></li>
        </ul>
        <p class="menu-label">
            Teams
        </p>
        <ul class="menu-list">
            <li><a>Create a team</a></li>
            <li><a>Invitations</a></li>
        </ul>

        @foreach(Auth::user()->teams as $team)
        <p class="menu-label">
                {{ $team->name }}
            </p>
            @foreach($team->servers as $server)
            <ul class="menu-list">
                    <li>
                            <a>{{ $server->friendly_name }} ({{ $server->ip }})</a>
                            <ul>
                                    <li><a>Dashboard</a></li>
                                    <li><a>Console</a></li>
                                    <li><a>Ban/Unban players</a></li>
                                    <li><a>Online players</a></li>
                            </ul>
                          </li>
                </ul>
            @endforeach

    </ul>
        @endforeach

        <p class="menu-label">
            Transactions
        </p>
        <ul class="menu-list">
            <li><a>Payments</a></li>
            <li><a>Cancel plan</a></li>
        </ul>
    </aside>
