<?php

namespace App\Http\Middleware;

use App\Models\GeneralDetails;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MaintenanceMode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $mode = GeneralDetails::find(1)->select('maintain_mode')->first();
        if ($mode->maintain_mode == 1) {
            return redirect()->route('maintenanceMode');
        } else {
            return $next($request);
        }
    }
}
