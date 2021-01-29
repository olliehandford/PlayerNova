<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    public static function baseRank()
    {
        return Rank::where('faction', '0')->where('level', '0')->first();
    }
}
