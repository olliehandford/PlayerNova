<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Helpers\Utilities;

class Player extends Model
{
    protected $connection = 'mysql_game';

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'playerid';
    }

    public function vehicles()
    {
        return $this->hasMany('App\Models\Vehicle', 'pid', 'playerid');
    }

    public function getLastPlayedDiffForHumans()
    {
        $carbon = Carbon::parse($this->last_seen);
        return $carbon->diffForHumans();
    }

    public function getJoinedDiffForHumans()
    {
        $carbon = Carbon::parse($this->insert_time);
        return $carbon->diffForHumans();
    }


    public function getAliases()
    {
        return Utilities::decodeDBArray($this->aliases);
    }

    public function getHighestRank()
    {
        $highest = Rank::baseRank()->name;
        if ($this->havoclevel > $this->mediclevel && $this->havoclevel > $this->coplevel) {
            $highest = Rank::where('faction', '3')->where('level', $this->havoclevel)->first()->name;
        } else if ($this->coplevel > $this->mediclevel && $this->coplevel > $this->havoclevel) {
            $highest = Rank::where('faction', '2')->where('level', $this->coplevel)->first()->name;
        } else if ($this->mediclevel > $this->coplevel && $this->mediclevel > $this->havoclevel) {
            $highest = Rank::where('faction', '1')->where('level', $this->mediclevel)->first()->name;
        }
        return $highest;
    }

    public function getHighestRankTag()
    {
        $rank = Rank::where('name', $this->getHighestRank())->first();

        return '<span class="tag ' . $rank->class . '"><i class="' . $rank->icon . '" style="margin-right: 5px;"></i> ' . $rank->name . '</span>';
    }

    public function getFactions()
    {
        $rankTplString = '';

        $civ = Rank::baseRank();
        $police = Rank::where('faction', '2')->where('level', $this->coplevel)->first();
        $medic = Rank::where('faction', '1')->where('level', $this->mediclevel)->first();
        $havoc = Rank::where('faction', '3')->where('level', $this->havoclevel)->first();

        $collection = collect(['Civilian' => $civ, 'Police' => $police, 'Medic' => $medic, 'HAVOC' => $havoc]);
        $filtered = $collection->filter(function ($value, $key) {
            return $value != null;
        });

        if ($filtered->count() > 1) {
            $filtered->forget('Civilian');
        }

        foreach ($filtered as $name => $rank) {
            $rankTplString .= ' <span class="tag ' . $rank->class . '"><i class="' . $rank->icon . '" style="margin-right: 5px;"></i> ' . $name . '</span>';
        }

        return $rankTplString;
    }

}
