<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $lang = 'en'; // defualt language

        app()->setLocale($request->segment(1) ?? $lang);
        session()->put('locale', $request->segment(1) ?? $lang);

        URL::defaults(['locale' => $request->segment(1)]);

        return $next($request);
    }
}
