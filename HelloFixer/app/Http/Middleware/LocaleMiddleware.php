<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if session has 'locale'. If not, set default to 'en'
        $locale = Session::get('locale', config('app.locale', 'en'));

        // Update application locale
        App::setLocale($locale);

        return $next($request);
    }
}
