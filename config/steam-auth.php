<?php

return [

    /*
     * Redirect URL after login
     */
    'redirect_url' => 'http://localhost:8000/auth/steam/handle',
    /*
     * API Key (set in .env file) [http://steamcommunity.com/dev/apikey]
     */
    'api_key' => env('STEAM_API_KEY', ''),
    /*
     * Is using https ?
     */
    'https' => false,

];
