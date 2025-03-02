<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Util\StringUtil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Redirect to Google OAuth.
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google OAuth callback.
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            if (!$googleUser || !$googleUser->getEmail() || !$googleUser->getName()) {
                return redirect()->route('login')->with('error', 'Google login failed. Missing required data.');
            }

            // Check if user exists
            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                // Create new user with default role "student"
                $user = User::create([
                    'firstName' => $googleUser->getName(),
                    'lastName' => '',
                    'email' => $googleUser->getEmail(),
                    'roles' => 'student',
                    'userNumber' => StringUtil::generateRandomNumber(5),
                    'password' => Hash::make(uniqid()),
                ]);
            }

            // Log the user in
            Auth::login($user);

            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Google login failed. Try again.');
        }
    }
}
