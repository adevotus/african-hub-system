<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EmailVerificationController extends Controller
{
    /**
     * Show the email verification notice.
     */
    public function showVerificationNotice()
    {
        return view('auth.verify');
    }

    /**
     * Handle the email verification process.
     */
    public function verify(EmailVerificationRequest $request)
    {
        $user = $request->user();
        $user->email_verified_at = now();
        $user->save();
        event(new Verified($user));

        return redirect('/login')->with('status', 'Your account has been activated! Please login to continue.');
    }

    /**
     * Resend the email verification link.
     */
    public function resendVerificationEmail(Request $request): \Illuminate\Http\RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect('/login')->with('status', 'Your email has been verified!');
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'Verification link resent!');
    }
}
