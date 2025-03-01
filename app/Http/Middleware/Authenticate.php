<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {

        if (!$request->expectsJson()) {
            // Check if the user is unauthorized due to max devices
            if (session('error') === 'You have reached the maximum allowed devices. Remove an old device to log in.') {
                return route('unauthorize');
            }

            // Default redirection to login page
            return route('login');
        }
    }
}
