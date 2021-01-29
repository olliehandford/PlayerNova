<?php

use Illuminate\Foundation\Inspiring;
use App\Helpers\ARC;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('test', function () {
    try {
        $rcon = new ARC('185.125.204.183', 'vrf=Qk?%6xqHB?KeQ327Vp', 2317, []);

        $array = $rcon->getPlayersArray();

        $this->comment($rcon->getConsoleOutput());

    } catch (Exception $e) {
        $this->comment("Ups! Something went wrong: {$e->getMessage()}");
    }
})->describe('Testing');
