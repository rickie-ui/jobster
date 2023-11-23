<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
         $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Check the user's role and redirect to the appropriate home page
                $user = Auth::guard($guard)->user();

                if ($user->role == 'admin') {
                    return redirect(RouteServiceProvider::HOME);
                } elseif ($user->role == 'applicant') {
                    return redirect(RouteServiceProvider::APPLICANT_HOME);
                }
            }
        }

        return $next($request);
    }
}
