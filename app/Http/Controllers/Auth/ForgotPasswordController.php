<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\MailService;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    protected  $mailService;

    public function __construct(MailService $mailService){
        $this->middleware('guest');
        $this->mailService = $mailService;
    }
    public function resetForm(){return view('auth.passwords.reset');}
    public function resetPasswordForm($token){return view('auth.passwords.reset-form-password', ['token' => $token]);}

    public function sendResetEmail(Request  $request){
        $userEmail = $request->only('email');

        $userData = User::where('email', $userEmail)->first();
        if ($userData) {
            // Generate a token
            $token = Str::random(60);

            $existingToken = PasswordReset::where('email', $userEmail)->first();

            if ($existingToken) {
                if (Carbon::parse($existingToken->created_at)->addHours(1)->isPast()) {
                    $existingToken->update(['token' => $token, 'created_at' => Carbon::now()]);
                } else {
                    return redirect()->route('login')->with('error', 'A password reset link was already sent to your email.');
                }
            } else {
                PasswordReset::updateOrCreate(
                    ['email' => $userData->email],
                    [
                        'email' => $userData->email,
                        'token' => $token,
                        'created_at' => Carbon::now(),
                    ]
                );
            }
            $this->mailService->sendPasswordResetEmail($userData->email,$userData->firstName, $token);

            $emailParts = explode('@', $userData->email);
            $maskedEmail = substr($emailParts[0], 0, 3) . '****@' . $emailParts[1];

            return redirect()->route('login')->with('success', 'Password reset link sent successfully to ' . $maskedEmail);

        }
        return redirect()->route('login')->with('error', 'Password reset link sent successfully.');
    }

    //change the password to hash
    public function resetPasswordSubmit($token, Request $request)
    {
        // Find the password reset entry using the token

        $passwordReset = PasswordReset::where('token', $token)->first();

        if (!$passwordReset) {return redirect()->route('login')->with('error', 'Invalid or expired link has been expired.');}

        $user = User::where('email', $passwordReset->email)->first();

        if (!$user) {return redirect()->route('login')->with('error', 'Incorrect email Please register again.');}

        $user->password = Hash::make($request->password);
        $user->save();

        PasswordReset::where('token', $token)->delete();
        return redirect()->route('login')->with('success', 'Your password has been successfully reset.Please Login to continue');
    }
}
