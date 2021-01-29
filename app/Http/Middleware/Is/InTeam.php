<?php

namespace App\Http\Middleware\Is;

use Closure;
use App\Models\Team;

class InTeam
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(!$request->team->users->contains(\Auth::user())) {
            return abort(404);
        }

        return $next($request);
    }
}
