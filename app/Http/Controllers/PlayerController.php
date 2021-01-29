<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayerController extends Controller
{
    public function player(Player $player)
    {
        return view('player.player')->with('player', $player);
    }
}
