<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $data = $request->input('data');

        $players = Player::where('playerid', $data)->orWhere('name', 'LIKE', '%' . $data . '%')->orWhereRaw("INSTR('" . $data . "', 'aliases')")->paginate(15);

        return view('search.results')->with('players', $players);
    }

    public function getSearch()
    {
        return view('search.search');
    }
}
