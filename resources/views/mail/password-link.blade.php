<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            border: 1px solid #e0e0e0;
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
            max-width: 120px;
        }
        h1 {
            font-size: 26px;
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            font-weight: 600;
        }
        p {
            font-size: 16px;
            color: #555;
            text-align: center;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .button {
            display: inline-block;
            padding: 12px 24px;
            font-size: 16px;
            color: #fff;
            background-color: #d66226;
            border-radius: 8px;
            text-decoration: none;
            margin: 20px auto;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .button:hover {
            background-color: #b24f1b;
            transform: translateY(-2px);
        }
        .footer {
            font-size: 14px;
            color: #777;
            margin-top: 30px;
            border-top: 1px solid #eee;
            padding-top: 20px;
            text-align: center;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="email-container">
    <!-- Logo -->
    <img src="https://africanhub.netlify.app/assets/img/logo/logd-01.png" alt="Company Logo" class="logo">

    <h1>AfricanHub</h1>

    <p style="text-align: start">Hello <strong>{{ $data['firstName'] }}</strong>,</p>

    <p style="text-align: start">We received a request to reset your password for your <strong>{{ config('app.name') }}</strong> account.</p>

    <p style="text-align: start">Click the button below to reset your password:</p>

    <!-- Reset Password Button -->
    <div style="text-align: center;">
{{--        <a href="{{ url('/password-reset?token=' . $data['token'] . '&email=' . $data['email']) }}" class="button" style="color: #000000 !important;">--}}
{{--            Reset Password--}}
{{--        </a> --}}
        <a href="{{ url('/password-reset/' . $data['token']) }}" class="button" style="color: #000000 !important;">
            Reset Password
        </a>
    </div>

    <p>If you did not request this, please ignore this email. Your password will remain unchanged.</p>

    <div class="footer">
        <p>Copyright © 2024 <strong>{{ config('app.name') }}</strong>. All rights reserved.</p>
        <p>Contact us at: <a href="mailto:info@africanhub.co.tz">info@africanhub.co.tz</a></p>
    </div>
</div>
</body>
</html>
