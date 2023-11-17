<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request) $next
     */
      public function handle(Request $request, Closure $next)
        {
            if (auth()->guard('admin')->check()) {
                return $next($request);
            }

            return redirect('/admin/login'); 
        }
}
