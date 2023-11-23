<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            $urlPrefix = $request->segment(1); // Get the first segment of the URL
            
            // Check the URL prefix and redirect to the appropriate login route
            switch ($urlPrefix) {
                case 'admin':
                    return route('login');
                case 'users':
                    return route('signin');
                // Add more cases for other URL prefixes as needed
                default:
                    return route('signin'); // Fallback to the default login route
            }
        }

        return null;
    }
}
