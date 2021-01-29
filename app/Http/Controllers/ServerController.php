<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Server;

class ServerController extends Controller
{
    public function getServer(Team $team, Server $server)
    {
        return view('user.server.server')->with('server', $server)->with('team', $team);
    }
}
