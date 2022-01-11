<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocalMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $locale = session('locale', 'ita');
        App::setLocale($locale);

        return $next($request);
    }
}
