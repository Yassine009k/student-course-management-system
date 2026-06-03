<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DateNaissanceMidle
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $age=Carbon::parse($request->dateNaissance)->age;
        if ($age>=18) {
            return $next($request);
        }
        return back()->with('erroreAge','age avoire 18');
    }
}
