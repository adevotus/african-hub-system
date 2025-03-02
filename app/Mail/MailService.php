<?php

namespace App\Mail;

use Illuminate\Support\Facades\Mail;

class MailService
{
    /**
     * Send a password reset email.
     *
     * @param string $email
     * @param string $token
     * @return void
     */
    public function sendPasswordResetEmail($email, $firstName, $token)
    {
        $data = [
            'token' => $token,
            'email' => $email,
            'firstName' => $firstName,
        ];

        Mail::send('mail.password-link', ['data' => $data], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Password Reset Request');
        });
    }
}
