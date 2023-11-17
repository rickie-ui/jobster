<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class ApplicantMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request)  $next
     */
    public function handle(Request $request, Closure $next)
        {
            if (auth()->guard('web')->check()) {
                return $next($request);
            }

            return redirect('/users/signin');
        }
}
