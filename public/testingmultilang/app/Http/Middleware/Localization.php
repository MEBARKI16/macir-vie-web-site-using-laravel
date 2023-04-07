<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class Localization
{
    /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
    public function handle(Request $request, Closure $next)
    {
        if (in_array($request->segment(1), config('app.available_locales'))) {
            App::setLocale($request->segment(1));
            session(['locale' => $request->segment(1)]);
        } else {
            App::setLocale(config('app.fallback_locale'));
            session(['locale' => config('app.fallback_locale')]);
        }

        return $next($request);
    }
}
