<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */

    public function handle(\Illuminate\Http\Request $request, Closure $next, $role)
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Check if the user's role matches the requested role
            if ($user->roles === $role) {
                return $next($request);
            }

            // Redirect based on user roles if it doesn't match the requested role
            switch ($user->roles) {
                case 'admin':
                    return redirect()->route('admin-dashboard');
                case 'student':
                    return redirect()->route('home');
                case 'super':
                    return redirect()->route('super-dashboard');
                default:
                    return redirect('/'); // Fallback route
            }
        }

        // If the user is not authenticated, redirect to login page
        return redirect('/');
    }
}
